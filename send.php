<?php
//移除Composer語法

// Import PHPMailer classes into the global namespace
 // These must be at the top of your script, not inside a function
 //use PHPMailer\PHPMailer\PHPMailer;
 //use PHPMailer\PHPMailer\SMTP;
 //use PHPMailer\PHPMailer\Exception;
 // Load Composer's autoloader
 //require 'vendor/autoload.php';

//新增
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//設定檔案路徑
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

//建立物件                                                                
$mail = new PHPMailer(true);

//KEY:jgrebuzuhyqibcfa

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  // Enable verbose debug output
    $mail->SMTPDebug = 2; // DEBUG訊息
    $mail->isSMTP(); // 使用SMTP
    $mail->Host = 'smtp.gmail.com'; // SMTP server 位址
    $mail->SMTPAuth = true;  // 開啟SMTP驗證
    $mail->Username = 'csumii1010@gmail.com'; // SMTP 帳號
    $mail->Password = 'JUSTMII10'; // SMTP 密碼
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->SMTPSecure = "ssl"; // Gmail要透過SSL連線
    $mail->Port       = 465; // SMTP TCP port 

    //設定收件人資料
    $mail->setFrom('csumii1010@gmail.com', 'Mailer'); // 寄件人(透過Gmail發送會顯示Gmail帳號為寄件者)
    $mail->addAddress('justisabelle1010@gmail.com', 'Apple User'); // 收件人會顯示 Apple User<apple@example.com>(*註2)
    // $mail->addAddress('banana@example.com'); // 名字非必填
    $mail->addReplyTo('csumii1010@gmail.com', 'Information'); //回信的收件人
    // $mail->addCC('cc@example.com'); //副本
    // $mail->addBCC('bcc@example.com'); //密件副本

    // 附件
    // $mail->addAttachment('/var/tmp/file.tar.gz'); // 附件 (*註3) 
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // 插入附件可更改檔名

    // 信件內容
    $mail->isHTML(true); // 設定為HTML格式
    $mail->Subject = 'Here is the subject'; // 信件標題
    $mail->Body    = 'This is the HTML message body <B>in bold!</B>'; // 信件內容
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; // 對方若不支援HTML的信件內容

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>