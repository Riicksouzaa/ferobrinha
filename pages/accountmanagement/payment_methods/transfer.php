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

$main_content .= '<div class="bank_link">';
$a = 0;
foreach ($config['banktransfer'] as $contas){
    $main_content .= '<div id="'.$contas['bank'].'modal">';
    $main_content .= '<div style="text-align: center; padding: 20px">';
    $main_content .= "<div><b>" . $contas['bank'] . "</b></div>";
    $main_content .= "<div><b>Favorecido:</b> " . $contas['name'] . "</div>";
    $main_content .= "<div><b>Agencia:</b> " . $contas['agency'] . "</div>";
    $main_content .= "<div><b>" . $contas['acctype'] . ":</b> " . $contas['account'] . "</div>";
    $main_content .= "<div>(" . $contas['acctype'] . ")</div>";
    $main_content .= "<div>(enviar comprovante no email: " . $contas['email'] . ")</div>";
    $main_content .= "</div>";
    $main_content .= "</div>";
    $main_content .= "
<script>
    $('#".$contas['bank']."modal').iziModal({
        headerColor: '#5f4d41',
        background: 'url(./layouts/tibiacom/images/global/content/scroll.gif)',
        title: 'Fazer doação via depósito com ".ucfirst($contas['bank'])."',
        subtitle: 'Faça sua doação via depósito com ".ucfirst($contas['bank'])." de acordo com o plano solicitado.',
        icon: 'icon-settings_system_daydream',
        overlayClose: true,
        fullscreen: true,
        openFullscreen: false,
        onFullscreen: function(modal){
            console.log(modal.isFullscreen);
        }
    });

    $(document).on('click', '.".$contas['bank']."', function (event) {
        event.preventDefault();
        $('#".$contas['bank']."modal').iziModal('open', event);
    });
</script>";
    $main_content .= '<a href="#" '.($a > 0? 'style="margin-left:15px"':'').' class="'.$contas['bank'].'">'.ucfirst($contas['bank']).'</a>';
    $a ++;
}
$main_content .= '</div>';