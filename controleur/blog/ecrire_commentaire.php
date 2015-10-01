<?php
session_start(); // On démarre la session AVANT toute chose

// Connexion à la bdd
include_once('../../modele/blog/connexion_sql.php');

// On poste le nouveau commentaire
include_once('../../modele/blog/post_commentaire.php');
$post_commentaire = post_commentaire($_POST['id_billet'], $_SESSION['id'], $_POST['contenu_commentaire']);

//On retourne sur le billet
header('Location: ../../commentaires.php?billet='.$_POST['id_billet'].'');