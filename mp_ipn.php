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
date_default_timezone_set("America/Sao_Paulo");

// Create an instance with your MercadoPago credentials (CLIENT_ID and CLIENT_SECRET):
// Argentina: https://www.mercadopago.com/mla/herramientas/aplicaciones
// Brasil: https://www.mercadopago.com/mlb/ferramentas/aplicacoes
// Mexico: https://www.mercadopago.com/mlm/herramientas/aplicaciones
// Venezuela: https://www.mercadopago.com/mlv/herramientas/aplicaciones
// Colombia: https://www.mercadopago.com/mco/herramientas/aplicaciones
// Chile: https://www.mercadopago.com/mlc/herramientas/aplicaciones
try {
    $now = date('d/m/Y H:i:s');
    if ($config['mp']['sandboxMode']) {
        $mp = new MP($config['mp']['SANDBOX_CLIENT_ID'], $config['mp']['SANDBOX_CLIENT_SECRET']);
    } else {
        $mp = new MP($config['mp']['CLIENT_ID'], $config['mp']['CLIENT_SECRET']);
    }
    $mp->sandbox_mode($config['mp']['sandboxMode']);

// Check mandatory parameters
    if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
        http_response_code(400);
        return;
    }
    
    $topic = $_GET["topic"];
    $merchant_order_info = NULL;
    
    switch ($topic) {
        case 'payment':
            $payment_info = $mp->get("/v1/payments/" . $_GET["id"]);
            $merchant_order_info = $mp->get("/merchant_orders/" . $payment_info["response"]["order"]["id"]);
            break;
        case 'merchant_order':
            $merchant_order_info = $mp->get("/merchant_orders/" . $_GET["id"]);
            break;
        default:
            $merchant_order_info = NULL;
    }
    
    if ($merchant_order_info == NULL) {
        echo "Error obtaining the merchant_order";
        die();
    }
    if ($merchant_order_info["status"] == 200) {
        var_dump($merchant_order_info);
    }
} catch (MercadoPagoException $e) {
    var_dump($e);
}