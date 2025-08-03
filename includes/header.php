<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();

$title = $title ?? "ReikiSan - Soins énergétiques Reiki";
$description = $description ?? "Retrouvez équilibre et sérénité grâce aux soins ReikiSan. Harmonisation énergétique pour corps et esprit.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($description) ?>">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($description) ?>">
<meta property="og:image" content="/assets/img/logo.png">
<meta property="og:type" content="website">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="icon" type="image/png" href="/assets/img/logo.png">
</head>
<body>
<header>
    <img src="/assets/img/logo.png" alt="ReikiSan" style="height:60px;">
    <nav>
        <a href="/">Accueil</a>
        <a href="/soins">Soins</a>
        <a href="/about">À propos</a>
        <a href="/contact">Contact</a>
    </nav>
</header>
