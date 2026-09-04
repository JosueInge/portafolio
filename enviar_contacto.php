<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contacto.php");
    exit;
}

// Obtener datos
$nombre = trim($_POST['nombre'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$empresa = trim($_POST['empresa'] ?? '');
$asunto = trim($_POST['asunto'] ?? '');
$descripcion = trim($_POST['descripcion'] ?? '');

// Validaciones básicas
if (
    empty($nombre) ||
    empty($correo) ||
    empty($asunto) ||
    empty($descripcion)
) {
    die("Faltan campos obligatorios.");
}

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    die("Correo electrónico no válido.");
}

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = 'wilfredojosuesorto644@gmail.com';

    $mail->Password = 'rkip ubpw arpb ypmn ';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = 587;

    $mail->CharSet = 'UTF-8';

    // Remitente
    $mail->setFrom('wilfredojosue438@gmail.com', 'Portafolio Web');

    // Destinatario (tu mismo correo)
    $mail->addAddress('wilfredojosue438@gmail.com');
    
    // Para que puedas responder directamente al visitante
    $mail->addReplyTo($correo, $nombre);

    $mail->isHTML(true);

    $mail->Subject = "Nuevo mensaje desde el portafolio: " . $asunto;

    $mail->Body = "
        <h2>Nuevo mensaje desde el formulario de contacto</h2>

        <hr>

        <p><strong>Nombre:</strong> {$nombre}</p>

        <p><strong>Teléfono:</strong> {$telefono}</p>

        <p><strong>Correo:</strong> {$correo}</p>

        <p><strong>Empresa:</strong> {$empresa}</p>

        <p><strong>Asunto:</strong> {$asunto}</p>

        <p><strong>Descripción:</strong></p>

        <p>{$descripcion}</p>
    ";

    $mail->send();

    header("Location: contacto.php?enviado=1");
    exit;

} catch (Exception $e) {

    echo "Error al enviar el correo: " . $mail->ErrorInfo;

}