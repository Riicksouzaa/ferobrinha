<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 23/04/2018
 * Time: 01:31
 */

$main_content .= "<br/>";
$main_content .= "
<div id='modal-picpay' class='iziModal'></div>
<script>
    $('#modal-picpay').iziModal({
        top: 50,
        headerColor: '#21c25e',
        background: 'green',
        title: 'Fazer doação com PicPay',
        subtitle: 'Faça sua doação com picpay de acordo com o plano solicitado.',
        icon: 'icon-settings_system_daydream',
        overlayClose: true,
        iframe : true,
        iframeURL: 'https://app.picpay.com/user/Ricardo.codenome',
        iframeHeight:500,
        fullscreen: true,
        openFullscreen: false,
        borderBottom: false,
        group: 'grupo1',
        onFullscreen: function(modal){
            console.log(modal.isFullscreen);
        }
    });

    $(document).on('click', '#picpay', function (event) {
        event.preventDefault();
        $('#modal-picpay').iziModal('open', event);
    });
</script>";
$main_content .= "<p style='font-size: 1.2em; text-align: center'>Ao clicar no botão abaixo será aberto um modal para você escanear nosso qrcode com o aplicativo PICPAY no seu smartphone.<br/> <b>Verifique antes o valor que você deverá doar</b> pois doações com valor diferente do solicitado poderão ser <b>recusadas</b>.<br/> Fique atento!</p>";
$main_content .= '
        
        <div class="SubmitButtonRow">
            <div class="CenterButton">
                    <div class="BigButton" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton.gif)">
                        <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                            <div class="BigButtonOver" style="background-image:url(' . $layout_name . '/images/global/buttons/sbutton_over.gif);"></div>
                            <input id="picpay" class="ButtonText" type="image" name="" alt="" src="' . $layout_name . '/images/global/buttons/_sbutton_buynow.gif">
                        </div>
                    </div>
            </div>
        </div>
                    
                    ';