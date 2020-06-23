<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23/04/2018
 * Time: 01:31
 */

if ($_POST['pic']) {
    if (!isset($_SESSION['dnt_bank'])) {
        $date = new DateTime();
        $now = time();
        $product_id = $_POST['pid'];
        $price = array_keys($config['donate']['offers'][intval($product_id)])[0];
        $coinCount = array_values($config['donate']['offers'][intval($product_id)])[0];


        $my_date_time = new DateTime('now');
        $my_date_time->add(new DateInterval('PT1H'));
        $formated_date = date_format($my_date_time, 'c');

        $kk = [
            "referenceId" => $account_logged->getName() . '-' . $_POST['pic'] . '-' . $now,
            "callbackUrl" => $config['picpay']['callbackUrl'],
            "returnUrl" => $config['picpay']['returnUrl'],
            "value"=> $price/100,
            "expiresAt" => $formated_date,
            "buyer" => [
                "firstName" => $account_logged->getName(),
                "lastName" => $account_logged->getRLName(),
                "document" => "123.456.789-10",
                "email" => $account_logged->getEMail(),
                "phone" => "+55 27 12345-6789"
            ]
        ];


        $ch = curl_init("https://appws.picpay.com/ecommerce/public/payments");
        # Setup request to send json via POST.
        $payload = json_encode($kk);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type:application/json",
            "x-picpay-token:{$config['picpay']['x-picpay-token']}"
        ]);
        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);

        $insert = $SQL->prepare("INSERT INTO z_shop_donates (date, reference, account_name, method, price, points, status) VALUES (:date, :reference, :account_name, :method, :price, :points, :status)");
        $insert->execute(['date' => $now, 'reference' => $account_logged->getName() . '-' . $_POST['pic'] . '-' . $now, 'account_name' => $account_logged->getName(), 'method' => 'picpay', 'price' => ($price / 100), 'points' => $coinCount, 'status' => 'Pending']);
        $_SESSION['dnt_bank'] = TRUE;
        $_SESSION['dnt_bank_tries'] = 0;
        $data = [
            'status' => 'success',
            'msg' => 'Pagamento processado com sucesso, em breve será abero um qrcode para escanear com o aplicativo PicPay.',
            'url_qrcode' => $result['qrcode']['content']
        ];
        echo json_encode($data);
        die();
    } else {
        $_SESSION['dnt_bank_tries'] = $_SESSION['dnt_bank_tries'] + 1;
        $data = [
            'status' => 'error',
            'msg' => 'Pagamento já processado anteriormente'
        ];
        echo json_encode($data);
        die();
    }
}

$main_content .= "<br/>";
$main_content .= "<div id='modal-picpay' class='iziModal'></div>";
$main_content .= "<p style='font-size: 1.2em; text-align: center'>Ao clicar no botão abaixo será aberto um modal para você escanear nosso qrcode com o aplicativo PICPAY no seu smartphone.<br/> <b>Verifique antes o valor que você deverá doar</b> pois doações com valor diferente do solicitado poderão ser <b>recusadas</b>.<br/> Fique atento!</p>";
$main_content .= '
<div class="SubmitButtonRow">
    <div class="CenterButton">
        <form id="picpayform" action="./?subtopic=accountmanagement&action=process_picpay_payment" method="post">
            <input type="hidden" value="picpay" name="pic"/>
            <input type="hidden" name="pid" value="' . $payment_data["storage_OrderServiceData"]["ServiceID"] . '">
            <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                    <input id="picpay" class="ButtonText" type="image" name="" alt="" src="' . $layout_name . '/images/global/buttons/_sbutton_buynow.gif">
                </div>
            </div>
        </form>
     </div>
</div>';
$main_content .= '
<script>

</script>';