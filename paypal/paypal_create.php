<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/03/2018
 * Time: 18:32
 */

require_once "config.php";

$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');
$amount = new \PayPal\Api\Amount();
$amount->setTotal('1.00');
$amount->setCurrency('BRL');
$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);
$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl("https://example.com/your_redirect_url.html")
             ->setCancelUrl("https://example.com/your_cancel_url.html");
$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
        ->setPayer($payer)
        ->setTransactions(array($transaction))
        ->setRedirectUrls($redirectUrls);
// 4. Make a Create Call and print the values
try {
    $payment->create($apiContext);
    echo $payment;
//    echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
}
catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}