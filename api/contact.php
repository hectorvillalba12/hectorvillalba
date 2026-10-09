<?php
require __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /#contacto');
    exit;
}

$nombre  = trim(htmlspecialchars($_POST['nombre'] ?? ''));
$email   = trim(htmlspecialchars($_POST['email'] ?? ''));
$asunto  = trim(htmlspecialchars($_POST['asunto'] ?? 'Sin asunto'));
$mensaje = trim(htmlspecialchars($_POST['mensaje'] ?? ''));

if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: /?msg=error#contacto');
    exit;
}

$mail = crearMailer();

try {
    $mail->setFrom(env('MAIL_USERNAME'), 'Portafolio');
    $mail->addAddress(env('MAIL_TO'));
    $mail->addReplyTo($email, $nombre);

    $mail->isHTML(false);
    $mail->Subject = '[Portafolio] ' . $asunto;
    $mail->Body    = "Nombre: {$nombre}\nEmail: {$email}\n\nMensaje:\n{$mensaje}\n\nEnviado el: " . date('d/m/Y H:i:s');

    $mail->send();
    header('Location: /?msg=ok#contacto');
} catch (Exception $e) {
    error_log('Error al enviar mail: ' . $e->getMessage());
    header('Location: /?msg=error#contacto');
}
exit;