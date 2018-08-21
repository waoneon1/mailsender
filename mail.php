<?php
require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';
require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$name   = $_POST['name'];
$phone  = $_POST['phone'];
$userid = $_POST['userid'];
$email  = $_POST['email'];

$content = 'Name : '.$name.'<br />';
$content .= 'Phone : '.$phone.'<br />';
$content .= 'ID : '.$userid.'<br />';
$content .= 'Email : '.$email.'<br />';

$mail = new PHPMailer;                              // Passing `true` enables exceptions
//Server settings
$mail->SMTPDebug = 2;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = HOST;                                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = USERNAME;                             // SMTP username
$mail->Password = PASSWORD;                              // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

//Recipients
$mail->setFrom(SENDER_EMAIL, SENDER_NAME);
$mail->addAddress(RECIPIENT_EMAIL, RECIPIENT_NAME);     // Add a recipient=

//Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = SUBJECT;
$mail->Body    = $content;
$mail->AltBody = $content;

$mail->send();
?>

<script type="text/javascript">
    window.location.href = "index.php";
</script>