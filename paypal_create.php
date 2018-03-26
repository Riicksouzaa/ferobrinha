<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/03/2018
 * Time: 18:32
 */

require_once "paypal_config.php";

$payee = new PayPal\Api\Payee();
$payee->setEmail($config['paypal']['email']);


$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');

$product_id = $_REQUEST['product_id'];
if(isset($_SESSION['account'])){
    $accname = $_SESSION['account'];
}else{
    $accname = $_REQUEST['accname'];
}

$price = (array_keys($config['donate']['offers'][intval($product_id)])[0] / 100);
$qnt = array_values($config['donate']['offers'][$product_id])[0];

$item = new \PayPal\Api\Item();
$item->setName($config['paypal']['itemName'])
    ->setCurrency($config['paypal']['currency'])
    ->setDescription($qnt." ".$config['paypal']['itemName'])
    ->setQuantity(1)
    ->setPrice($price)
    ->setSku($accname . '-' . $product_id);

$list = new \PayPal\Api\ItemList();
$list->setItems([$item]);

$subtotal = (number_format($price/$qnt,2))*$qnt;
$shipping_discount = $price - ((number_format($price/$qnt,2))*$qnt);
$details = new \PayPal\Api\Details();
$details->setShipping(0)
    ->setTax(0)
    ->setShippingDiscount(0)
    ->setSubtotal($price);

$amount = new \PayPal\Api\Amount();
$amount->setTotal($price)
    ->setCurrency('BRL')
    ->setDetails($details);

$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount)
    ->setItemList($list)
    ->setDescription("Compra de $qnt coins.");


$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl($config['paypal']['redirect_url'])
    ->setCancelUrl($config['base_url']);

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);
// 4. Make a Create Call and print the values
try {
    $payment->create($apiContext);
    echo $payment;
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}