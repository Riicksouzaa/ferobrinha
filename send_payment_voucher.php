<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23/04/2018
 * Time: 18:58
 */
/** @var Account $acc */
/** @var int $coinCount */
/** @var  $pay_method */
/** @var  $date_now */
/** @var  $transaction_code */

if ($config['site']['send_emails']) {
    
    $payeer_name = (($acc->getRLName() == '' || $acc->getRLName() == NULL) ? $acc->getName() : $acc->getRLName());
    $subject = 'Sua compra de ' . ($doubleStatus() ? '2x ' . $coinCount : $coinCount) . ' ' . $config['sale']['productName'] . ' no website ' . $config['server']['serverName'];
    $mailDescription = "Recibo da sua compra de " . ($doubleStatus() ? '2x ' . $coinCount : $coinCount) . " " . $config['sale']['productName'] . "<br/> no website " . $config['server']['serverName'];
    $mailBodyDescription = "Segue abaixo os dados para conferencia da sua compra.";
    $mailBody = "
    ==============================<br/>
    Recibo de compra<br/>
    ==============================<br/>
    Nome do cliente: {$payeer_name} <br/>
    Método de Pagamento: {$pay_method}<br/>
    Data do pedido: {$date_now} <br/>
    Pedido n: {$transaction_code}<br/>
    Account: {$name} <br/><br/>
    
    " . ($doubleStatus() ? 'Double Active:' : '') . "
    " . ($doubleStatus() ? '(' . $coinCount . '+' . $coinCount . ') Total: ' . ($coinCount * 2) : $coinCount) . " {$config['sale']['productName']}<br/><br/>
    
    Subtotal: R$ " . number_format($price, '2', ',', '.') . " BRL<br/>
    Impostos/Taxas: R$ 0,00 BRL<br/>
    Envio e manuseio: R$ 0,00 BRL<br/>
    Taxa de envio: R$ 0,00 BRL<br/>
    Total: R$ " . number_format($price, '2', ',', '.') . " BRL";
    
    /** Envio */
    $mail = new SendMail();
    $mail->send($acc->getEMail(), $payeer_name, $subject, $mailDescription, $mailBodyDescription, $mailBody);
}