<?php
session_start(); // On démarre la session AVANT toute chose
include_once('../../modele/blog/connexion_sql.php');

// On purifie le HTML du contenu de ckeditor
require_once 'htmlpurifier/HTMLPurifier.standalone.php';
    
   $purifier = new HTMLPurifier();
   $clean_contenu = $purifier->purify($_POST['contenu_billet']);

// On sécurise le titre  et l'id du billet avant l'injection dans la bdd
$titre_secure = htmlspecialchars($_POST['titre_billet']);
$id_billet = (int) $_POST['billet_id'];

// On met à jour le billet
include_once('../../modele/blog/post_modifier_billet.php');
post_modifier_billet($titre_secure, $clean_contenu, $id_billet);

//On retourne sur la liste des billets
header('Location: ../../membre.php');