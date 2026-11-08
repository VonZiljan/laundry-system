<?php
require_once __DIR__ . '/vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__)->safeLoad();

$smtpEmail = $_ENV['SMTP_EMAIL'] ?? '';
$smtpPass = $_ENV['SMTP_PASSWORD'] ?? '';
