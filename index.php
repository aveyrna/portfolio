<?php
require __DIR__ . '/inc/config.php';
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= SITE_TITLE ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aubry Varen — reboot en cours">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<main class="container">
    <div class="card">
        <h1>Aubry est en plein reboot</h1>
        <p class="subtitle">
            Pas de panique ! Ses sytèmes sont <strong><span style="color:green">OK</span></strong> <br />
            Il a juste besoin de quelques jours pour compiler les trop nombreuses données accumulées ces derniers temps.
        </p>

        <p class="hint">
            Revenez dans quelques jours.
        </p>
    </div>
</main>

<footer>
    <span>© <?= date('Y') ?> Aubry Varen</span>
</footer>

</body>
</html>
