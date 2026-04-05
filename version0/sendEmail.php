<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charge PHPMailer via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        // --- CONFIGURATION DU SERVEUR HOSTINGER ---
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';    // Serveur SMTP de Hostinger
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sara@jadi-digital.com'; // TON EMAIL HOSTINGER
        $mail->Password   = 'Maroc-2025@2026!';    // TON MOT DE PASSE
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // --- DESTINATAIRES ---
        $mail->setFrom('sara@jadi-digital.com', 'JADI DIGITAL'); 
        $mail->addAddress('sara@jadi-digital.com'); // Où tu reçois le message
        $mail->addReplyTo($_POST['email'], $_POST['name']); // Pour répondre au client

        // --- CONTENU ---
        $mail->isHTML(true);
        $mail->Subject = "Nouveau contact : " . $_POST['subject'];
        $mail->Body    = "<h3>Nouveau message de " . htmlspecialchars($_POST['name']) . "</h3>" .
                         "<p><strong>Email :</strong> " . htmlspecialchars($_POST['email']) . "</p>" .
                         "<p><strong>Message :</strong><br>" . nl2br(htmlspecialchars($_POST['message'])) . "</p>";

        $mail->send();
        header("Location: contact.php?status=success");
    } catch (Exception $e) {
        header("Location: contact.php?status=error");
    }
} else {
    header("Location: contact.php");
}
