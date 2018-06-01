<?php
// comment to show E_NOTICE [undefinied variable etc.], comment if you want make script and see all errors
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);

//COMPOSER AUTOLOAD
require __DIR__ . '/vendor/autoload.php';
require_once 'twitch_streams.php';

// true = show sent queries and SQL queries status/status code/error message
define('DEBUG_DATABASE', FALSE);

define('INITIALIZED', TRUE);

// if not defined before, set 'false' to load all normal
if (!defined('ONLY_PAGE'))
    define('ONLY_PAGE', FALSE);

define('AJAXREQUEST', FALSE);
header("cache-control: must_revalidate, public, max-age=3600");
header("X-Content-Type-Options: nosniff");
header("X-FRAME-OPTIONS: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
date_default_timezone_set('America/Sao_Paulo');

// check if site is disabled/requires installation
include_once('./system/load.loadCheck.php');

// fix user data, load config, enable class auto loader
include_once('./system/load.init.php');

// DATABASE
include_once('./system/load.database.php');
if (DEBUG_DATABASE)
    Website::getDBHandle()->setPrintQueries(TRUE);
// DATABASE END

// LOGIN
if (!ONLY_PAGE)
    include_once('./system/load.login.php');
// LOGIN END

// COMPAT
// some parts in that file can be blocked because of ONLY_PAGE constant
include_once('./system/load.compat.php');
// COMPAT END

// LOAD PAGE
include_once('./system/load.page.php');
// LOAD PAGE END
// LAYOUT


/** Função responsável por limpar algumas sessions */
function flushSession ()
{
    $date = new DateTime();
    $now = $date->format('Y-m-d H:i:s');
    $timeout_time = Website::getWebsiteConfig()->getValue('timeout_time');
    $valid = date_add($date, date_interval_create_from_date_string($timeout_time . ' minutes'))->format('Y-m-d H:i:s');
    if (isset($_SESSION['valida']) && isset($_SESSION['now']) && $_SESSION['tries']) {
        $_SESSION['now'] = $now;
        if ($_SESSION['now'] >= $_SESSION['valida']) {
            unset($_SESSION['now'], $_SESSION['valida'], $_SESSION['tries']);
        }
    }
    if (isset($_REQUEST['storage_OrderServiceData']['PaymentMethodName']) && $_REQUEST['storage_OrderServiceData']['PaymentMethodName'] == 'transfer') {
        //do nothing
    } else {
        unset($_SESSION['dnt_bank'], $_SESSION['dnt_bank_tries']);
    }
}

/** Função utilizada para validar multiplas requisições. */
function valida_multiplas_reqs ()
{
    $timeout_time = Website::getWebsiteConfig()->getValue('timeout_time');
    $date = new DateTime();
    $now = $date->format('Y-m-d H:i:s');
    $valid = date_add($date, date_interval_create_from_date_string($timeout_time . ' minutes'))->format('Y-m-d H:i:s');
    $maxtries = Website::getWebsiteConfig()->getValue('max_req_tries');
    flushSession();
    $_SESSION['now'] = $now;
    if (!isset($_SESSION['valida'])) {
        $_SESSION['valida'] = $valid;
    }
    if (!isset($_SESSION['tries'])) {
        $_SESSION['tries'] = 0;
    }
    if ($_SESSION['now'] < $_SESSION['valida']) {
        if ($_SESSION['tries'] < $maxtries) {
            $_SESSION['tries'] = $_SESSION['tries'] + 1;
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        unset($_SESSION['valida'], $_SESSION['tries']);
        return FALSE;
    }
}

flushSession();
// with ONLY_PAGE we return only page text, not layout
if (in_array($_REQUEST['subtopic'], array("play", "refresh", "client_options_serverscript"))) {
    echo $main_content;
} else {
    if (!ONLY_PAGE)
        include_once('./system/load.layout.php');
    else
        echo $main_content;
}
// LAYOUT END