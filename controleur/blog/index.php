<?php

// On demande les 100 derniers billets (modèle)
include_once('modele/blog/get_billets.php');
$billets = get_billets(0, 100);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = $billet['contenu'];
}

// On affiche la page (vue)
include_once('vue/blog/index.php');