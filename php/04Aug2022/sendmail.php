<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = "localhost";
$mail->setFrom('from@mywebsite.com', 'Web Site');
$mail->addAddress('user@customer.com');
$mail->Subject = 'Thank you for the order';
$mail->Body = "Your package will ship out asap!";
$mail->send();
?>

?>