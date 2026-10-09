<?php
require 'config.php';

$db = new PDO('sqlite:' . __DIR__ . '/mail_queue.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("CREATE TABLE IF NOT EXISTS queue (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT, email TEXT, asunto TEXT, mensaje TEXT,
    enviado INTEGER DEFAULT 0, creado_en TEXT
)");

$pendientes = $db->query("SELECT * FROM queue WHERE enviado = 0 ORDER BY id")->fetchAll(PDO::FETCH_ASSOC);

foreach ($pendientes as $msg) {
    $mail = crearMailer();
    try {
        $mail->setFrom($_ENV['MAIL_USERNAME'], 'Portafolio');
        $mail->addAddress($_ENV['MAIL_TO']);
        $mail->addReplyTo($msg['email'], $msg['nombre']);
        $mail->isHTML(false);
        $mail->Subject = '[Portafolio] ' . $msg['asunto'];
        $mail->Body    = "Nombre: {$msg['nombre']}\nEmail: {$msg['email']}\n\nMensaje:\n{$msg['mensaje']}";
        $mail->send();
        $db->prepare("UPDATE queue SET enviado = 1 WHERE id = ?")->execute([$msg['id']]);
        echo "Enviado #{$msg['id']}\n";
    } catch (Exception $e) {
        error_log("Fallo #{$msg['id']}: " . $e->getMessage());
    }
}
echo "Listo. " . count($pendientes) . " mensajes procesados.\n";