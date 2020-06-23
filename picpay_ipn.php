<?php
require 'config/config.php';
require_once "vendor/autoload.php";

use Picpay\Exception\RequestException;
use Picpay\Request\StatusRequest;

error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);
define('DEBUG_DATABASE', FALSE);
define('INITIALIZED', TRUE);
if (!defined('ONLY_PAGE')) {
    define('ONLY_PAGE', TRUE);
}
include_once('./system/load.loadCheck.php');
include_once('./system/load.init.php');
include_once('./system/load.database.php');
if (DEBUG_DATABASE) {
    Website::getDBHandle()->setPrintQueries(TRUE);
}
require_once "classes/account.php";
require_once "picpay_config.php";

$hehe = file_get_contents('php://input');
$notification = json_decode($hehe, true);
$referenceId = $notification['referenceId'];

try {
    $statusRequest = new StatusRequest($seller, $referenceId);
    $statusResponse = $statusRequest->execute();
    $picpayTransact = $SQL->prepare("SELECT account_name,points from z_shop_donates where reference = :refID limit 1");
    $picpayTransact->execute(['refID' => $referenceId]);
    $tresult = $picpayTransact->fetchAll();

    switch ($statusResponse->status) {
        case "paid":
            $accountName = $tresult[0]['account_name'];
            $account = new Account();
            $account->loadByName($accountName);
            $account->setPremiumPoints($account->getPremiumPoints() + $tresult[0]['points']);
            $account->save();
            $updateTransact = $SQL->prepare("UPDATE z_shop_donates set status = :status where reference = :ref");
            $updateTransact->execute(['status' => $statusResponse->status, 'ref' => $referenceId]);
            break;
        default:
            break;
    }

} catch (RequestException $e) {
    $errorMessage = $e->getMessage();
    $statusCode = $e->getCode();
    $errors = $e->getErrors();
}