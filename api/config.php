<?php
require 'vendor/autoload.php';

// Cargar variables de entorno una sola vez
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Función para crear un mailer ya configurado
function crearMailer(): PHPMailer\PHPMailer\PHPMailer {
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['MAIL_USERNAME'];
    $mail->Password   = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $_ENV['MAIL_PORT'];
    return $mail;
}