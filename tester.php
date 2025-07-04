<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/firstPHP/loginhome/php.mailer/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/firstPHP/loginhome/php.mailer/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/firstPHP/loginhome/php.mailer/PHPMailer-master/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.outlook.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'phptest75@outlook.com'; // Your Gmail address
    $mail->Password   = 'Mynameis27med!';  // Your Gmail password or App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable SSL encryption
    $mail->Port       = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('phptest75@outlook.com', 'Tester');
    $mail->addAddress('dummyacc2621@gmail.com', 'Ahmed Zizo'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>