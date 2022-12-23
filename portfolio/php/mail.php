<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$Cookie=yaml_parse_file('../data/secret.yml');

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
try{
    $mail->SMTPDebug = 0;
    $mail->IsSMTP(); 
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true; 
    $mail->Username = 'vivienmailportfolio@gmail.com';
    $mail->Password = 'bcoytkqsmpxrwtyb';
    $mail->SMTPSecure = 'STARTTLS'; 
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($_POST['mail'], $_POST['name']);
    $mail->addAddress('vivien.lherondelle@sts-sio-caen.info');
    
    $mail->isHTML(true);
    $mail->Subject = $_POST['nom'];
    $mail->Body = $_POST['mail'].'</br>';
    $mail->Body = $_POST['sexe'].'</br>';
    $mail->Body = $_POST['objet'].'</br>';
    $mail->Body = $_POST['contenu'];

    $mail->Send();
    header('Location: ../index.php');
    exit();
}
catch (Exception $e){
    echo "erreur de l'envoie.";
    echo 'mailer error: ' . $mail->ErrorInfo;
}

?>