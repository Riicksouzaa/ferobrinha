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
        $main_content .= '
<div style="text-align: center">
    <form class="desativa_secret" action="./valida_secret.php" method="post">
    <p>Você está com a proteção de 2 fatores ativada em sua conta.</p>
    <input type="hidden" value="0" name="inactivate">
    <input type="submit" value="Quero Desativar!"/>
    </form>
<script>
    $(".desativa_secret").submit(function() {
        var form = $(this);
        var data = form.serialize();
        var url = form.attr("action");
        var type = form.attr("method");
        $.ajax({
        url: url,
        data: data,
        type: type,
        dataType: "json",
        beforeSend: function(){
            $(".se-pre-con").fadeIn("fast");
        },
        success: function(response) {
          if(response.status === "error"){
              setInterval(function() {
                $(".se-pre-con").fadeOut("slow");
                $(".response").html("<b>"+response.msg+"</b>");
              }, 1000);
          }else{
            window.location.href = "./?subtopic=accountmanagement&action=auth&step=autenticar";
            setInterval(function() {              
                $(".se-pre-con").fadeOut("slow");
            }, 2000);
          }
        }
        });
        return false;
    });
</script>
</div>
        ';
    } else {
        if ($step == '') {
            $main_content .= '<div style="text-align: center">';
            $main_content .= '
<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span><span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span><span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span><span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
            <div class="Text">Warning</div>
            <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span><span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span><span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span><span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table1" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width:100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Você precisa habilitar a autenticação de 2 fatores.</p>
                                        <p><b style="color: red;">Please read this warning carefully as it contains important security information!</b></p>
                                        <p>If you skip this message, you might <b>lose your Tibia account</b>. Before you connect your account with an authenticator, make sure to have a <b>valid recovery key</b>. If you do not have a valid recovery key, please get one before you connect your account with an authenticator.</p>
                                        <p>Why?<br>
                                            The recovery key is the only way to unlink the authenticator from your Tibia account in various cases, among others:
                                        </p>
                                        <ul>
                                            <li>you lose your device (mobile phone, tablet etc.) with the authenticator app</li>
                                            <li>the device with the authenticator app does not work anymore</li>
                                            <li>the device with the authenticator app gets stolen</li>
                                            <li>you delete the authenticator app from your device and reinstall it</li>
                                            <li>your device is reset for some reason</li>
                                        </ul>
                                        <p>Please note that the authenticator data is not saved on your device\'s account (e.g. Google or iTunes sync) even if you have app data backup&amp;synchronisation activated in the settings of your device!</p>
                                        <p>In all these scenarios, the recovery key is the only way to get access to your Tibia account. Note that not even customer support will be able to help you in these cases if you do not have a valid recovery key.</p>
                                        <!--<p><input type="checkbox" name="warn_auth" id="warn_auth"><label for="warn_auth"><b>I hereby confirm that I have read and understood the above warning. If I connect my Tibia account to an authenticator without having a valid recovery key, I risk losing my Tibia account.</b></label></p>-->
                                        <p>Do you have a valid recovery key and would like to request the email with the confirmation key to start connecting your Tibia account to an authenticator?</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
            ';
            $main_content .= '
<div class="SubmitButtonRow">
    <div class="RightButton">
        <form action="./?subtopic=accountmanagement&action=auth&step=autenticar" method="post">
            <div class="BigButton" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton_green.gif)">
                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                    <div class="BigButtonOver" style="background-image:url(./layouts/tibiacom/images/global/buttons/sbutton_green_over.gif);"></div>
                    <input class="ButtonText" type="image" name="step" alt="next" src="./layouts/tibiacom/images/global/buttons/_sbutton_next.gif">
                </div>
            </div>
        </form>
    </div>
    <div class="LeftButton">
        <form action="./?subtopic=accountmanagement&action=manage" method="post" style="padding:0px;margin:0px;">
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
            $main_content .= '</div>';
        }
        if ($step == 'autenticar') {
            if ($account_logged->getSecretStatus() == 1) {

            } else {
                $main_content .= '
<td>
    <div class="secret">
        <div style="text-align: center">
            <p>Scan the QR CODE with your smartphone</p>
            <img src="' . $tfa->getQRCodeImageAsDataUri($account_logged->getName(), $secret) . '">
            <p> OR </p>
            <p><span style="font-size: 2em">' . chunk_split($secret, 4, ' ') . '</span></p>
            <form id="protectCode" action="./valida_secret.php" method="post">
                <p class="response"></p>
                <input type="number" placeholder="SecretCode" id="SecretCode" name="SecretCode">
                <input type="submit" value="Proteger" id="test">
            </form>
        <p>After click on "Proteger" your account aways need to use the two factor to login.</p>
        </div>     
    </div>
    <script>
        $("#protectCode").submit(function() {
        var form = $(this);
        var data = form.serialize();
        var url = form.attr("action");
        var type = form.attr("method");
                
        $.ajax({
        url: url,
        data: data,
        type: type,
        dataType: "json",
        beforeSend: function(){
            $(".se-pre-con").fadeIn("fast");
        },
        success: function(response) {
          if(response.status === "error"){
              setInterval(function() {
                $(".se-pre-con").fadeOut("slow");
                $(".response").html("<b>"+response.msg+"</b>");
              }, 1000);
          }else{
              window.location.href = "./?subtopic=accountmanagement&action=auth&step=autenticar";
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
    <div class="CenterButton">
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
    }
} else {
    header("location: ./?subtopic=accountmanagement");
}