<?php
/**
 *
 * @package        uam.skeleton
 * @subpackage  controllers
 * @author        Codenome Developpers - Main Developer: Ricardo <http://codenome.com>
 * @copyright    Copyright (c) 2018, Codenome. (http://myara.net/)
 * @license        GPL v3
 * @link        http://uam.codenome.com
 * @since        Version 0.0.1
 * @filesource
 */

if (!defined('INITIALIZED'))
    exit;
$step = $_REQUEST['step'];
if ($logged) {
    if ($account_logged->getSecretStatus() == 1) {
        $main_content .= "Você está protegido!";
    } else {
        if ($step == '') {
            $main_content .= '<div style="text-align: center">';
            $main_content .= 'Você precisa habilitar a autenticação de 2 fatores.';
            $main_content .= '
<div class="SubmitButtonRow">
    <div class="CenterButton">
        <form action="./?subtopic=accountmanagement&action=auth&step=autenticar" method="post">
            <div class="BigButton" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton_green.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton_green_over.gif);"></div>
                    <input class="ButtonText" type="image" name="step" alt="next" src="./layouts/tibiacom/images/global/buttons/_sbutton_next.gif">
                </div>
            </div>
        </form>
    </div>
</div>
            ';
            $main_content .= '</div>';
        }
        if ($step == 'autenticar') {
            $main_content .= '
<td>
    <img src="' . $tfa->getQRCodeImageAsDataUri('My label', $secret) . '">
    <form id="protectCode" action="./valida_secret.php" method="post">
        <p class="response"></p>
        <input type="number" placeholder="SecretCode" id="SecretCode" name="SecretCode">
        <input type="submit" value="Proteger" id="test">
    </form>
    <script>
        $("#protectCode").submit(function() {
        var form = $(this);
        var data = form.serialize();
        var url = form.attr("action");
        var type = form.attr("method");
        
        console.log(data);
        
        $.ajax({
        url: url,
        data: data,
        type: type,
        dataType: "json",
        beforeSend: function(){
            
        },
        success: function(response) {
          if(response.status === "error"){
              $(".response").html("Error");
          }else{
              $(".response").html("OK");
          }
        }
        })
        return false;
        });
    </script>
</td>
            ';
            $main_content .= '
<div class="SubmitButtonRow">
    <div class="RightButton">
        <form action="./?subtopic=accountmanagement&action=auth" method="post" style="padding:0px;margin:0px;">
            <div class="BigButton" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton_red.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton_red_over.gif);"></div>
                    <input class="ButtonText" type="image" name="Cancel" alt="Cancel" src="./layouts/tibiacom/images/global/buttons/_sbutton_cancel.gif">
                </div>
            </div>
        </form>
    </div>
</div>
            ';
        }
    }
} else {
    header("location: ./?subtopic=accountmanagement");
}