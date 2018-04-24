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

/**
 * @param string $tid
 * @return bool
 */
$issetTransactionOnDatabase = function ($tid) use ($SQL) {
    $query = $SQL->query("SELECT * FROM paypal_transactions WHERE txn_id = '$tid'")->fetchAll();
    $result = count($query);
    if ($result > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
};
$doubleStatus = function () use ($SQL) {
    $q = $SQL->query("SELECT value FROM server_config WHERE config = 'double'")->fetchAll();
    if ($q[0]['value'] == "active") {
        return TRUE;
    } else {
        return FALSE;
    }
};

/**
 * @param $payment_status
 * @param $txn_id
 */
$updatepaypal = function ($payment_status, $txn_id) use ($SQL) {
    $SQL->query("UPDATE paypal_transactions SET payment_status = '$payment_status' WHERE txn_id = '$txn_id'")->fetchAll();
};
/**
 * @param $payment_status
 * @param $payer_email
 * @param $payer_id
 * @param $item_number1
 * @param $mc_gross
 * @param $mc_currency
 * @param $txn_id
 */
$insertpaypal = function ($payment_status, $payer_email, $payer_id, $item_number1, $mc_gross, $mc_currency, $txn_id) use ($SQL) {
    $SQL->query("INSERT INTO paypal_transactions (payment_status, payer_email, payer_id, item_number1, mc_gross, mc_currency, txn_id) VALUES ('$payment_status','$payer_email','$payer_id','$item_number1','$mc_gross','$mc_currency','$txn_id')")->fetchAll();
};

$log_post = function () {
    $handle = fopen('paypal.log', 'a');
    fwrite($handle, "-------------------------\r\n");
    foreach ($_POST as $key => $value) {
        fwrite($handle, $key . "=>" . $value . "\r\n");
    }
    fwrite($handle, "-------------------------\r\n");
    fclose($handle);
};
/** $payment_status = "Completed";$payer_email = "meucomprador@gmail.com";$payer_id = "5SZY8K2LZ8H8L";$item_number1 = "item_number1";$mc_gross = 98.10;$mc_currency = "BRL";$txn_id = "4GC74590A5738524S";if($issetTransactionOnDatabase($txn_id)){$updatepaypal($payment_status,$txn_id);}else{$insertpaypal($payment_status,$payer_email,$payer_id,$item_number1,$mc_gross,$mc_currency,$txn_id);}*/
/** @var PaypalIPN $ipn */
$ipn = new PaypalIPN();
$ipn->useSandbox();
$ipn->usePHPCerts();
date_default_timezone_set("America/Sao_Paulo");
try {
    /** @var boolean $verified */
    $verified = $ipn->verifyIPN();
    if ($verified) {
//        $log_post();
        $payment_status = $_POST['payment_status'];
        $payer_id = $_POST['payer_id'];
        $payer_email = $_POST['payer_email'];
        $item_number1 = $_POST['item_number1'];
        $mc_currency = $_POST['mc_currency'];
        $tid = $_POST['txn_id'];
        $ex = explode('-', $item_number1);
        $acc_name = $ex[0];
        $product_id = $ex[1];
        $date = new DateTime();
        $now = $date->format('d/m/Y H:i:s');
        $price = (array_keys($config['donate']['offers'][intval($product_id)])[0] / 100);
        $coinCount = array_values($config['donate']['offers'][$product_id])[0];
        $acc = new Account();
        $acc->loadByName($acc_name);
        if ($payment_status == "Completed") {
            if ($issetTransactionOnDatabase($tid)) {
                $updatepaypal($payment_status, $tid);
            } else {
                $insertpaypal($payment_status, $payer_email, $payer_id, $item_number1, $price, $mc_currency, $tid);
            }
            $handle = fopen("paypal.log", "a");
            $coins_old = $acc->getPremiumPoints();
            $acc->setPremiumPoints($acc->getPremiumPoints() + ($doubleStatus ? $coinCount * 2 : $coinCount));
            $acc->save();
            $coins_new = $acc->getPremiumPoints();
            fwrite($handle, $now . ":> status:" . $payment_status . ";accname:" . $acc_name . ";pid:" . $product_id . ";qnt:" . $coinCount . ";price:" . $price . ";saldo_anterior:" . $coins_old . ";novo_saldo:" . $coins_new . ";tid:" . $tid . "\r\n");
            fclose($handle);
    
            $date_now = date('Y-m-d H:i:s');
            $transaction_code = $_POST['txn_id'];
            $pay_method = "Paypal";
            include_once "send_payment_voucher.php";
            // Reply with an empty 200 response to indicate to paypal the IPN was received correctly
            header("HTTP/1.1 200 OK");
        } else {
            if ($issetTransactionOnDatabase($tid)) {
                $updatepaypal($payment_status, $tid);
            } else {
                $insertpaypal($payment_status, $payer_email, $payer_id, $item_number1, $price, $mc_currency, $tid);
            }
            $handle = fopen("paypal.log", "a");
            fwrite($handle, $now . ":> status:" . $payment_status . ";accname:" . $acc_name . ";pid:" . $product_id . ";qnt:" . $coinCount . ";price:" . $price . "\r\n");
            fclose($handle);
            header("HTTP/1.1 200 OK");
        }
    } else {
        $handle = fopen("paypal.log", "a");
        $date = new DateTime();
        $now = $date->format('d/m/Y H:i:s');
        fwrite($handle, $now . ":>verify_error;from:" . $_SERVER['REMOTE_ADDR'] . "\r\n");
        fclose($handle);
        header("Location: " . $config['base_url']);
        exit();
    }
} catch (Exception $e) {
    $handle = fopen("paypal.log", "a");
    $date = new DateTime();
    $now = $date->format('d/m/Y H:i:s');
    fwrite($handle, $now . ":> " . $e->getMessage() . ";from:" . $_SERVER['REMOTE_ADDR'] . "\r\n");
    fclose($handle);
}