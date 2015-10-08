<?php
session_start(); // On démarre la session AVANT toute chose

// Connexion à la bdd
include_once('../../modele/blog/connexion_sql.php');

// On purifie le HTML du contenu de ckeditor
require_once 'htmlpurifier/HTMLPurifier.standalone.php';
    
   $purifier = new HTMLPurifier();
   $clean_contenu = $purifier->purify($_POST['contenu_billet']);

// On sécurise le titre avant l'injection dans la bdd
$titre_secure = htmlspecialchars($_POST['titre_billet']);

// On poste le nouveau billet
include_once('../../modele/blog/post_billet.php');
$post_billet = post_billet($titre_secure, $clean_contenu, $_SESSION['id']);

//On retourne sur la liste des billets
header('Location: ../../index.php');