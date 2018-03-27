<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/03/2018
 * Time: 23:41
 */

require 'paypal_config.php';
try {
    $output = \PayPal\Api\WebhookEventType::availableEventTypes($apiContext);
    $handle = fopen('paypal.log', "a");
    fwrite($handle, "----------------------\r\n");
    foreach ($_POST as $key=>$value){
        fwrite($handle, $key."=>".$value);
    }
    fwrite($handle, "----------------------\r\n");
    fclose($handle);
} catch (Exception $ex) {
    var_dump($ex);
   exit(1);
}
return $output;