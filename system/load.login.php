<?php
if (!defined('INITIALIZED'))
    exit;

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'logout')
    Visitor::logout();
if (!isset($_SESSION['logado'])) {
    if (isset($_REQUEST['account_login']) && isset($_REQUEST['password_login']) && isset($_REQUEST['login']) && $_REQUEST['login'] == 'ok') {
        Visitor::setAccount($_REQUEST['account_login']);
        Visitor::setPassword($_REQUEST['password_login']);
        //G RECAPTCHA TESTE
        if (isset($_POST['login']) && $_POST['login'] == 'ok' && $_POST['account_login'] != '' && $_POST['password_login'] != '') {
            $result = file_get_contents('https://www.google.com/recaptcha/api/siteverify', FALSE, stream_context_create(array(
                'http' => array(
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query(array(
                        'response' => $_POST['g-recaptcha-response'],
                        'secret' => Website::getWebsiteConfig()->getValue('gRecaptchaSecret'),
                        'remoteip' => $_SERVER['REMOTE_ADDR']
                    )),
                ),
            )));
            $result = json_decode($result);
            Visitor::setRecaptchaStatus($result->success);
        } else {
            Visitor::setRecaptchaStatus(FALSE);
        }
        if (isset($_REQUEST['secretCode_login'])) {
            Visitor::setSecretCode($_REQUEST['secretCode_login']);
        }
        //Visitor::login(); // this set account and password from code above as login and password to next login attempt
        //Visitor::loadAccount(); // this is required to force reload account and get status of user
        $isTryingToLogin = TRUE;
    }
}
Visitor::login();
