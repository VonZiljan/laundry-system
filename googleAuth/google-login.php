<?php
include __DIR__ . '/../config.php';
require_once __DIR__ . '/../vendor/autoload.php';

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID'] ?? '');
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET'] ?? '');
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT'] ?? '');
$client->addScope('email');
$client->addScope('profile');

header('Location: ' . $client->createAuthUrl());
exit();