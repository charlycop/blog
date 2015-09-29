<?php
// On demande le billet en question
include_once('modele/blog/get_billets.php');
$billets = get_billets($_GET['billet'], 0, 1);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On demande les 5 derniers commentaires
include_once('modele/blog/get_commentaires.php');
$commentaires = get_commentaires(0, 5);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($commentaires as $cle => $commentaire)
{
    $commentaires[$cle]['auteur'] = htmlspecialchars($commentaire['auteur']);
    $commentaires[$cle]['commentaire'] = nl2br(htmlspecialchars($commentaire['commentaire']));
}



// On affiche la page (vue)
include_once('vue/blog/commentaires.php');