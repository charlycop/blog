<?php

// On récupères les infos du membre
include_once('modele/blog/get_all_infos_membre.php');
$all_infos_membre = get_all_infos_membre($_SESSION['id']);

// On demande les 1000 derniers billets (modèle)
include_once('modele/blog/get_billets_membre.php');
$billets = get_billets_membre($_SESSION['id'], 0, 1000);

// On effectue du traitement sur les données (contrôleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = $billet['contenu'];
}

// On récupère l'avatar
if (isset($_SESSION['avatar']))
{
	$avatarmembre = 'vue/blog/img/avatars/'.$_SESSION['id'].'_150x150'.$_SESSION['avatar'].'';
}

else
{
	$avatarmembre = 'vue/blog/img/avatars/avatar_150x150.png';
}

// On Insère des fonctions
include_once ('modele/blog/compte_commentaires.php');

// On affiche la page (vue)
include_once('vue/blog/membre.php');