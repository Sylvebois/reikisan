<?php
$title = "Contact - ReikiSan";
$description = "Contactez-moi pour vos séances de soins énergétiques Reiki.";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/config.php';

$result = ['type' => 'hidden', 'message' => ""];

if(isset($_GET['success'])) {
    switch ($_GET['success']) {
        case '1':
            $result['type'] = 'success';
            $result['message'] = "Message envoyé avec succès.";
            break;
        case '-1':
            $result['type'] = 'failure';
            $result['message'] = "Erreur lors de l'envoi du message.";
            break;
        case '403':
            $result['type'] = 'error';
            $result['message'] = "Accès interdit.";
            break;
        default:
            $result['type'] = 'hidden';
            $result['message'] = "";
    }
}
?>

<main>
    <h1>Contactez-moi</h1>
    <form action="sendmail.php" method="POST">
        <input type="text" name="name" placeholder="Votre nom" required>
        <input type="email" name="email" placeholder="Votre email" required>
        <textarea name="message" placeholder="Votre message" required></textarea>
        <button type="submit" class="btn">Envoyer</button>
    </form>
    
        <div class=<?= $result['type']?>>
            <?= $result['message'] ?>
        </div>
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
