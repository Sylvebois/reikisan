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
  <script src="/assets/js/main.js" defer></script>
</head>

<body>
  <header>
    <a href="/"><img src="/public/assets/img/logo.png" alt="ReikiSan" id="logo"></a>
    <nav id="desktop-nav">
      <a href="/">Accueil</a>
      <a href="/reiki">Le Reiki</a>
      <a href="/soins">Les Soins</a>
      <a href="/about">À propos</a>
      <a href="/contact">Contact</a>
    </nav>
    <button id="toggle-menu" aria-label="Ouvrir et fermer le menu">
      <img src="/public/assets/img/icons/hamburger-menu.svg" alt="Ouvrir le menu">
      <img src="/public/assets/img/icons/close-menu.svg" alt="Fermer le menu" class="hidden">
    </button>
    <nav id="mobile-nav" class="hidden-menu">
      <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/reiki">Le Reiki</a></li>
        <li><a href="/soins">Les Soins</a></li>
        <li><a href="/about">À propos</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
  </header>