<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();

$google_maps_api_key = $_ENV['GOOGLE_MAPS_API_KEY'];
$contact_email = $_ENV['CONTACT_EMAIL'];
$smtp_config = [
    'host' => $_ENV['SMTP_HOST'],
    'port' => $_ENV['SMTP_PORT'],
    'user' => $_ENV['SMTP_USER'],
    'pass' => $_ENV['SMTP_PASS'],
];