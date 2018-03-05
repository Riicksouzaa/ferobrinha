<?php
require __DIR__ . '/vendor/autoload.php';

require_once 'config/config.php';

define('INITIALIZED', true);
if(!defined('ONLY_PAGE'))
    define('ONLY_PAGE', false);
include_once "system/load.init.php";
include_once "system/load.login.php";
include_once "system/load.database.php";
include_once "system/load.compat.php";

/**
 * @param String $msg
 */
function sendErrorMsg($msg = null)
{
    $hue = [];
    $hue['status'] = "error";
    if ($msg !== null) {
        $hue['msg'] = $msg;
    } else {
        $hue['msg'] = "Somente requisições post são permitidas";
    }
    echo json_encode($hue);
}

if (isset($_POST['SecretCode'])) {
    $hue = [];
    $code = $_POST['SecretCode'];
    $secret = $account_logged->getSecret();
    $hue['secret'] = $secret;
    $hue['code'] = $code;
    $hue['real_code'] = $tfa->getCode($secret);
    $result = $tfa->verifyCode($secret, $code);

    if ($result === true) {
        $account_logged->setSecretStatus(true);
        $account_logged->save();
        $hue['status'] = 'success';
        echo json_encode($hue);
    } else {
        $hue['status'] = 'error';
        echo json_encode($hue);
    }
} else {
    sendErrorMsg('Dados post inválidos.');
}