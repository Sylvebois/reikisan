<?php
$title = "Contact - ReikiSan";
$description = "Contactez-moi pour vos séances de soins énergétiques Reiki.";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/config.php';
?>

<main>
    <h1>Contactez-moi</h1>
    <form action="/includes/send.php" method="POST">
        <input type="text" name="name" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" placeholder="Votre message" required></textarea>
        <button type="submit" class="btn">Envoyer</button>
    </form>
    <div style="margin-top:2rem;">
        <iframe
          width="100%"
          height="300"
          style="border:0"
          loading="lazy"
          allowfullscreen
          src="https://www.google.com/maps/embed/v1/view?key=<?= $google_maps_api_key ?>&center=50.556090560164755,5.57230964710869&zoom=15">
        </iframe>
    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
