<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/04/2018
 * Time: 02:20
 */
if (!defined('INITIALIZED'))
    define("INITIALIZED", TRUE);
require 'config/config.php';
// true = show sent queries and SQL queries status/status code/error message
// fix user data, load config, enable class auto loader
require_once "vendor/autoload.php";
include_once('./system/load.init.php');
$mail = new SendMail();
$mail->send('souzaariick@gmail.com', 'Ricardo', 'Se liga nessa', 'Olha só isso', 'se liga logo krl', 'EOQ MALUCO');