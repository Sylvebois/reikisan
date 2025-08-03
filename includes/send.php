<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = strip_tags($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = strip_tags($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $smtp_config['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_config['user'];
        $mail->Password = $smtp_config['pass'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = $smtp_config['port'];

        $mail->setFrom($email, $name);
        $mail->addAddress($contact_email);

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message depuis ReikiSan';
        $mail->Body = nl2br($message);

        $mail->send();
        echo "Message envoyé avec succès.";
    } 
    catch (Exception $e) {
        echo "Erreur lors de l'envoi : {$mail->ErrorInfo}";
    }
}
