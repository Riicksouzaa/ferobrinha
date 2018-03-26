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
require_once "classes/account.php";

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
            $date = new DateTime();
            $now = $date->format('d/m/Y H:i:s');
            $price = (array_keys($config['donate']['offers'][intval($product_id)])[0] / 100);
            $qnt = array_values($config['donate']['offers'][$product_id])[0];
            $acc = new Account();
            $acc->loadByName($acc_name);
            $handle = fopen("paypal.log", "a");
            fwrite($handle, $now." :> accname:".$acc_name. ";pid:" . $product_id.";qnt:". $qnt.";price:". $price ."\r\n");
            fclose($handle);
            $acc->setPremiumPoints($acc->getPremiumPoints() + $qnt);
            $acc->save();
            // Reply with an empty 200 response to indicate to paypal the IPN was received correctly
            header("HTTP/1.1 200 OK");
        }
    } else {
        $handle = fopen("paypal.log", "a");
        $date = new DateTime();
        $now = $date->format('d/m/Y H:i:s');
        fwrite($handle, $now.":>verify_error;from:".$_SERVER['REMOTE_ADDR']."\r\n");
        fclose($handle);
        header("Location: " . $config['base_url']);
        exit();
    }
} catch (Exception $e) {
    $handle = fopen("paypal.log", "a");
    $date = new DateTime();
    $now = $date->format('d/m/Y H:i:s');
    fwrite($handle, $now.":> ".$e->getMessage().";from:".$_SERVER['REMOTE_ADDR']."\r\n");
    fclose($handle);
}