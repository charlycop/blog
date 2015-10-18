<?php
// On demande le billet en question
include_once('modele/blog/get_billets.php');
$billets = get_billets($_GET['billet'], 0, 1);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu_billet'] = $billet['contenu_billet'];
}

// On compte le nombre de commentaires
include_once('modele/blog/compte_commentaires.php');
$nb_commentaire = compte_commentaires($_GET['billet']);

// On demande les 100 derniers commentaires
include_once('modele/blog/get_commentaires.php');
$commentaires = get_commentaires(0, 100);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($commentaires as $cle => $commentaire)
{
    $commentaires[$cle]['id_membre'] = htmlspecialchars($commentaire['id_membre']);
    $commentaires[$cle]['commentaire'] = $commentaire['commentaire'];
}



// On affiche la page (vue)
include_once('vue/blog/commentaires.php');