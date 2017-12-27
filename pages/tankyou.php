<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 27/12/2017
 * Time: 10:17
 */

require './config/config.php';
// comment to show E_NOTICE [undefinied variable etc.], comment if you want make script and see all errors
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);
// true = show sent queries and SQL queries status/status code/error message
define('DEBUG_DATABASE', false);
define('INITIALIZED', true);
if (!defined('ONLY_PAGE'))
    define('ONLY_PAGE', true);
// check if site is disabled/requires installation
include_once('./system/load.loadCheck.php');
// fix user data, load config, enable class auto loader
include_once('./system/load.init.php');
// DATABASE
include_once('./system/load.database.php');
if (DEBUG_DATABASE)
    Website::getDBHandle()->setPrintQueries(true);
if (DEBUG_DATABASE)
    Website::getDBHandle()->setPrintQueries(true);

if(isset($_REQUEST['tcode'])){
    $tcode = $_REQUEST['tcode'];
    $code_status = $SQL->query("SELECT * FROM `pagseguro_transactions` WHERE `transaction_code` = '{$tcode}'")->fetchAll();
    $count = count($code_status);
    if($count > 0){
        $main_content = "Parabéns pela compra de {$code_status[0]['item_count']} {$config['pagseguro']['produtoNome']} em breve os mesmos serão creditados em sua acc.";
    }else{
        header("Location: ./");
    }
}else{
    header("Location: ./");
}
