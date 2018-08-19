<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 24/04/2018
 * Time: 02:20
 */

require 'config/config.php';
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

$mail = new SendMail('test', 'souzaariick@gmail.com', 'Ricardo', 'test', 'test');
echo "teste";

die();


require 'config/config.php';
require_once "vendor/autoload.php";

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;
use \PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(TRUE);

try {
    /** Server settings */
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $config['site']['smtp_host'];           // Specify main and backup SMTP servers
    $mail->SMTPAuth = $config['site']['smtp_auth'];       // Enable SMTP authentication
    $mail->Username = $config['site']['smtp_user'];       // SMTP username
    $mail->Password = $config['site']['smtp_pass'];       // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    /** Recipients */
    $mail->setFrom($config['site']['smtp_user'], "Contato - ");
    $mail->addAddress('souzaariick@gmail.com');     // Add a recipient
    
    /** Content */
    $mail->isHTML(TRUE);                                  // Set email format to HTML
    $mail->Subject = 'Sua compra de';
    $mail->Body = 'test';
    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}