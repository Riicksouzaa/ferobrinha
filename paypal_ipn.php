<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 25/03/2018
 * Time: 00:05
 */

require('paypal/PaypalIPN.php');
$ipn = new PaypalIPN();
$ipn->useSandbox();
try {
    $verified = $ipn->verifyIPN();
    if($verified){
        $handle = fopen("paypal.log", "w+");
        foreach ($_POST as $key =>$str){
            fwrite($handle, "req:".$key." resp:".$str."\n");
        }
        fclose($handle);
    }
} catch (Exception $e) {

}


// Reply with an empty 200 response to indicate to paypal the IPN was received correctly
header("HTTP/1.1 200 OK");