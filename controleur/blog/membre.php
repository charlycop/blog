<?php

// On récupères les infos du membre
include_once('modele/blog/get_all_infos_membre.php');
$all_infos_membre = get_all_infos_membre($_SESSION['id']);

// On demande les 100 derniers billets (modèle)
include_once('modele/blog/get_billets_membre.php');
$billets = get_billets_membre($_SESSION['id'], 0, 1000);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = $billet['contenu'];
}

// On Insère des fonctions
include ('modele/blog/compte_commentaires.php');


// On affiche la page (vue)
include_once('vue/blog/membre.php');