<?php
// Load Composer's autoloader
require 'vendor/autoload.php';
require_once 'mail_config.php';  // Path to Composer's autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Instantiate PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();  // Use SMTP
    $mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
    $mail->SMTPAuth = true;  // Enable SMTP authentication
    $mail->Username = $smtpEmail;  // Your Gmail address
    $mail->Password = $smtpPass;  // Your Gmail password (or use app password for 2FA accounts)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use STARTTLS encryption
    $mail->Port = 587;  // Gmail SMTP port

    // Recipients
    $mail->setFrom($smtpEmail, 'Laundry System Services');
    $mail->addAddress($smtpEmail, 'Von Ziljan');  // Recipient's email

    // Content
    $mail->isHTML(false);  // Send as plain text (you can change this to true for HTML emails)
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = 'This is a test email sent using PHPMailer.';

    // Send email
    if ($mail->send()) {
        echo 'Message has been sent successfully!';
    } else {
        echo 'Message could not be sent.';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
