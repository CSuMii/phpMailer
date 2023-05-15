<?php

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = "587";
$mail->Username = 'csumii1010@gmail.com'; // SMTP 帳號
$mail->Password = 'yjhuazsqoakxgahz'; // SMTP 密碼

$mail->Subject = 'Here is the subject'; // 信件標題
$mail->setFrom('csumii1010@gmail.com', 'Mailer'); // 寄件人(透過Gmail發送會顯示Gmail帳號為寄件者)
$mail->Body    = 'This is the HTML message body <B>in bold!</B>'; // 信件內容
$mail->addAddress('justisabelle1010@gmail.com', 'Apple User');

if($mail->send()){
    echo 'Message has been sent';
} else{
    echo "Error";
}
$mail->SmtpClose();

?>
