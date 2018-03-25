<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/03/2018
 * Time: 20:34
 */

require_once "config/config.php";
require_once "vendor/autoload.php";

$apiContext = '';
if($config['paypal']['env'] == "production"){
    $apiContext = new \PayPal\Rest\ApiContext( new \PayPal\Auth\OAuthTokenCredential($config['paypal']['clientID'], $config['paypal']['clientSecretID']));
}elseif($config['paypal']['env'] == "sandbox"){
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'Ae-k_4Ru2Fjz1xOyYtd8h5pe8-3YUamp5yNVBNii_cbg3gt_xeHd-euzK-iPaFnFg__p9NBlOIt8epTc',     // ClientID
            'EEBobQC-5xkBQx8AjJtaEutAu7QNbY7V0RX5imzyjkRUgyie50oJCtvXWXqqemXS7j76lqyX0UlOFnyG'      // ClientSecret
        )
    );
}else{
    exit(1);
}

