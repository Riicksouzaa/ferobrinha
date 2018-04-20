<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 27/03/2018
 * Time: 19:46
 */

// Include Mercadopago library
require_once "config/config.php";
require_once "vendor/autoload.php";

// Create an instance with your MercadoPago credentials (CLIENT_ID and CLIENT_SECRET):
// Argentina: https://www.mercadopago.com/mla/herramientas/aplicaciones
// Brasil: https://www.mercadopago.com/mlb/ferramentas/aplicacoes
// Mexico: https://www.mercadopago.com/mlm/herramientas/aplicaciones
// Venezuela: https://www.mercadopago.com/mlv/herramientas/aplicaciones
// Colombia: https://www.mercadopago.com/mco/herramientas/aplicaciones
// Chile: https://www.mercadopago.com/mlc/herramientas/aplicaciones

try {
    if ($config['mp']['sandboxMode']) {
        $mp = new MP($config['mp']['SANDBOX_CLIENT_ID'], $config['mp']['SANDBOX_CLIENT_SECRET']);
    } else {
        $mp = new MP($config['mp']['CLIENT_ID'], $config['mp']['CLIENT_SECRET']);
    }
    $mp->sandbox_mode($config['mp']['sandboxMode']);
    $params = ["access_token" => $mp->get_access_token()];
// Check mandatory parameters
    if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
        http_response_code(400);
        return;
    }
    // Get the payment reported by the IPN. Glossary of attributes response in https://developers.mercadopago.com
    if ($_GET["topic"] == 'payment') {
        $payment_info = $mp->get("/v1/payments/" . $_GET["id"], $params, FALSE);
        $merchant_order_info = $mp->get("/merchant_orders/" . $payment_info["response"]["order"]["id"], $params, FALSE);
// Get the merchant_order reported by the IPN. Glossary of attributes response in https://developers.mercadopago.com
    } else if ($_GET["topic"] == 'merchant_order') {
        $merchant_order_info = $mp->get("/merchant_orders/" . $_GET["id"], $params, FALSE);
    }
//If the payment's transaction amount is equal (or bigger) than the merchant order's amount you can release your items
    if ($merchant_order_info["status"] == 200) {
        $transaction_amount_payments = 0;
        $transaction_amount_order = $merchant_order_info["response"]["total_amount"];
        $payments = $merchant_order_info["response"]["payments"];
        foreach ($payments as $payment) {
            if ($payment['status'] == 'approved') {
                $transaction_amount_payments += $payment['transaction_amount'];
            }
        }
        if ($transaction_amount_payments >= $transaction_amount_order) {
            $handle = fopen('mp.log', "a");
            fwrite($handle, "-------------------------\r\n");
            foreach ($_REQUEST as $key=>$value){
                fwrite($handle, $key."=>".$value."\r\n");
            }
            fwrite($handle, "-------------------------\r\n");
            fclose($handle);
        } else {
            $handle = fopen('mp.log', "a");
            fwrite($handle, "-------------------------\r\n");
            foreach ($_REQUEST as $key=>$value){
                fwrite($handle, $key."=>".$value."\r\n");
            }
            fwrite($handle, "-------------------------\r\n");
            fclose($handle);
        }
    }
    
} catch (MercadoPagoException $e) {
    $handle = fopen('mp.log', "a");
    fwrite($handle, "-------------------------\r\n");
    fwrite($handle, $e->getMessage()."\r\n");
    fwrite($handle, "-------------------------\r\n");
    fclose($handle);
}