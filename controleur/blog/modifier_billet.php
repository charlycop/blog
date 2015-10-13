<?php

// Récupération de la valeur $_GET
$id_billet = (int) $_GET['billet'];

// On demande le billet en question
include_once('modele/blog/get_billets.php');
$billets = get_billets($id_billet, 0, 1);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = $billet['contenu'];
}

// On affiche la page (vue)
include_once('vue/blog/modifier_billet.php');