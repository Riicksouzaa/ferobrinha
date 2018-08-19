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