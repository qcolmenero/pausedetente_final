<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("phpmailer\src\Exception.php");
require_once("phpmailer\src\PHPMailer.php");
require_once("phpmailer\src\SMTP.php");

if (isset($_POST['agree']) && 
    $_POST['agree'] == "on" &&
    isset($_POST['firstname']) &&
    isset($_POST['lastname']) && 
    isset($_POST['email']) && 
    isset($_POST['mailbody'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mailbody = $_POST['mailbody'];

    $smtpAndFromEmail = "";
    $smtpAndFromPassword = "";
    $targetEmail = "";




    $smtpPassword = $smtpAndFromPassword;
    $smtpUsername = $smtpAndFromEmail;

    $emailFrom = $smtpAndFromEmail;
    $emailFromName = $smtpAndFromEmail;

    $emailTo = $targetEmail;
    $emailToName = $targetEmail;

    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 587; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->setFrom($emailFrom, $emailFromName);
    $mail->addAddress($emailTo, $emailToName);
    $mail->Subject = 'Concours pause detente '.$firstname." ".$lastname;
    $mail->msgHTML($mailbody."<br> Adresse e-mail : ".$email); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $mail->AltBody = 'HTML messaging not supported';
    // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
    if (!$mail->send()) {
        echo json_encode("Mailer Error: " . $mail->ErrorInfo);
    } else {
        echo json_encode("SUCCESS");
    }
} else if( isset($_POST['agree']) && $_POST['agree'] != "on") { 
    echo json_encode("NOTCHECKED");
} else {
    echo json_encode('NOTFILLED');
}


?>