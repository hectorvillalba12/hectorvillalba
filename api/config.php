<?php
require __DIR__ . '/../vendor/autoload.php';

// En local carga el .env de la raíz; en Vercel no existe ese archivo
// y se usan las variables definidas en Settings > Environment Variables.
Dotenv\Dotenv::createImmutable(dirname(__DIR__))->safeLoad();

// Lee una variable de entorno (sirve en local y en Vercel)
function env(string $key, string $default = ''): string
{
    $value = $_ENV[$key] ?? getenv($key);
    return ($value === false || $value === null || $value === '') ? $default : (string) $value;
}

// Crea un mailer ya configurado
function crearMailer(): PHPMailer\PHPMailer\PHPMailer
{
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = env('MAIL_HOST');
    $mail->SMTPAuth   = true;
    $mail->Username   = env('MAIL_USERNAME');
    $mail->Password   = env('MAIL_PASSWORD');
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = (int) env('MAIL_PORT', '587');
    $mail->Timeout    = 8; // las funciones serverless tienen tiempo limitado
    return $mail;
}