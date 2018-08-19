<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 19/08/2018
 * Time: 12:08
 */

use PHPMailer\PHPMailer\PHPMailer;

$sendmail = function ($serverName, $sendTo, $nameSendTo, $subject, $body) {
    echo "q";
    $mail = new PHPMailer(TRUE);
    try {
        /** Server settings */
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = Website::getWebsiteConfig()->getValue('smtp_host');           // Specify main and backup SMTP servers
        $mail->SMTPAuth = Website::getWebsiteConfig()->getValue('smtp_auth');       // Enable SMTP authentication
        $mail->Username = Website::getWebsiteConfig()->getValue('smtp_user');       // SMTP username
        $mail->Password = Website::getWebsiteConfig()->getValue('smtp_pass');       // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        
        /** Recipients */
        $mail->setFrom(Website::getWebsiteConfig()->getValue('smtp_user'), "Contato - " . $serverName);
        $mail->addAddress($sendTo, $nameSendTo);     // Add a recipient
        
        /** Content */
        $mail->isHTML(TRUE);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        
        $mail->send();
        print_r("test");
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
};