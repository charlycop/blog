<?php
session_start(); // On démarre la session AVANT toute chose

// Connexion à la bdd
include_once('../../modele/blog/connexion_sql.php');

// On poste le nouveau commentaire
include_once('../../modele/blog/post_commentaire.php');
$post_commentaire = post_commentaire($_POST['id_billet'], $_SESSION['id'], $_POST['contenu_commentaire']);

//On récupère l'email de l'auteur du billet
include_once ('../../modele/blog/get_email.php');
$email_membre = get_email($_POST['id_auteur']);


// On envoie un email à l'auteur du billet
$to = $email_membre['email'];
$subject = 'Nouveau commentaire sur votre billet';
$msg = 'Un nouveau commentaire vient d\'être posté sur votre billet intitulé \"'.$_POST['titre_billet'].'\".';
$headers = 'From: Super Blog <charlycop@free.fr>'."\r\n";
$headers .= 'Bcc: Moi <charlycop@free.fr>'."\r\n";
$headers .= "\r\n";
mail('1020916229@qq.com', $subject, $msg, $headers);


//On retourne sur le billet
header('Location: ../../commentaires.php?billet='.$_POST['id_billet'].'');