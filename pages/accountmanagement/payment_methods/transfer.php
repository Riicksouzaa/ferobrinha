<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23/04/2018
 * Time: 01:31
 */

if (!isset($_SESSION['dnt_bank'])) {
    $date = new DateTime();
    $now = time();
    $product_id = $payment_data["storage_OrderServiceData"]["ServiceID"];
    $price = array_keys($config['donate']['offers'][intval($product_id)])[0];
    $coinCount = array_values($config['donate']['offers'][intval($product_id)])[0];
    $insert = $SQL->prepare("INSERT INTO z_shop_donates (date, reference, account_name, method, price, points, status) VALUES (:date, :reference, :account_name, :method, :price, :points, :status)");
    $insert->execute(['date' => $now, 'reference' => $account_logged->getName() . '-' . $config['banktransfer']['bank'], 'account_name' => $account_logged->getName(), 'method' => $payment_data["storage_OrderServiceData"]["PaymentMethodName"], 'price' => ($price / 100), 'points' => $coinCount, 'status' => 'Pending']);
    
    
    $_SESSION['dnt_bank'] = TRUE;
    $_SESSION['dnt_bank_tries'] = 0;
} else {
    $_SESSION['dnt_bank_tries'] = $_SESSION['dnt_bank_tries'] + 1;
}

$main_content .= '<br/>';
$main_content .= '<div class="TableContainer">';
$main_content .= $make_content_header("Sumary");
$main_content .= $make_table_header();
$main_content .= "<tr><td>";
$main_content .= "<div style='text-align: center'><b>Sua solicitação foi processada.</b></div><br/>";
$main_content .= "<div style='text-align: center'><b>FAÇA O DEPÓSITO UTILIZANDO AS SEGUINTES CREDENCIAIS</b></div><br/>";
$main_content .= "<div style='text-align: center'><b>" . $config['banktransfer']['bank'] . "</b></div>";
$main_content .= "<div style='text-align: center'><b>Favorecido:</b> " . $config['banktransfer']['name'] . "</div>";
$main_content .= "<div style='text-align: center'><b>Agencia:</b> " . $config['banktransfer']['agency'] . "</div>";
$main_content .= "<div style='text-align: center'><b>" . $config['banktransfer']['acctype'] . ":</b> " . $config['banktransfer']['account'] . "</div>";
$main_content .= "<div style='text-align: center'>(" . $config['banktransfer']['acctype'] . ")</div>";
$main_content .= "<div style='text-align: center'>(enviar comprovante no email: " . $config['banktransfer']['email'] . ")</div>";
$main_content .= "</td></tr>";
$main_content .= $make_table_footer();
$main_content .= "</div>";