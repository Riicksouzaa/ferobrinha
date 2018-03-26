<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 25/03/2018
 * Time: 00:05
 */
/**
 * Login to client 11.50 made by Muuleek
 */
require 'config/config.php';
/**
 * comment to show E_NOTICE [undefinied variable etc.], comment if you want make script and see all errors
 */
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);
/**
 * true = show sent queries and SQL queries status/status code/error message
 */
define('DEBUG_DATABASE', FALSE);
define('INITIALIZED', TRUE);
if (!defined('ONLY_PAGE')) {
    define('ONLY_PAGE', TRUE);
}
/**
 * check if site is disabled/requires installation
 */
include_once('./system/load.loadCheck.php');
/**
 * fix user data, load config, enable class auto loader
 */
include_once('./system/load.init.php');
/**
 * DATABASE
 */
include_once('./system/load.database.php');
if (DEBUG_DATABASE) {
    Website::getDBHandle()->setPrintQueries(TRUE);
}
/**
 * EndDatabase
 */
/** REQUEST PAYPAL-IPN CLASS */
require('paypal/PaypalIPN.php');

/** @var PaypalIPN $ipn */
$ipn = new PaypalIPN();
$ipn->useSandbox();
$ipn->usePHPCerts();
try {
    /** @var boolean $verified */
    $verified = $ipn->verifyIPN();
    if ($verified) {
        $payment_status = $_POST['payment_status'];
        if ($payment_status == "Completed") {
            $payer_email = $_POST['payer_email'];
            $item_number1 = $_POST['item_number1'];
            $ex = explode('-', $item_number1);
            $acc_name = $ex[0];
            $product_id = $ex[1];
            $price = (array_keys($config['donate']['offers'][intval($product_id)])[0] / 100);
            $qnt = array_values($config['donate']['offers'][$product_id])[0];
            $handle = fopen("paypal.log", "w");
            fwrite($handle, "--------------------------------\n");
            foreach ($_POST as $key => $str) {
                fwrite($handle, "$key=> $str\n");
            }
            fwrite($handle, $acc_name . "\r\n" . $item_id . "\r\n");
            fwrite($handle, "\n--------------------------------\n");
            fclose($handle);
            require_once "classes/account.php";
            $acc = new Account();
            $acc->loadByName($acc_name);
            $acc->setPremiumPoints($acc->getPremiumPoints() + $qnt);
            $acc->save();
            // Reply with an empty 200 response to indicate to paypal the IPN was received correctly
            header("HTTP/1.1 200 OK");
        }
    } else {
        header("Location: " . $config['base_url']);
        exit();
    }
} catch (Exception $e) {
    $handle = fopen("paypal.log", "w");
    fwrite($handle, "\n################################\n");
    fwrite($handle, $e->getMessage());
    fwrite($handle, "\n################################\n");
    fclose($handle);
}