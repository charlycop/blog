<?php
session_start(); // On démarre la session AVANT toute chose

// Connexion à la bdd
include_once('../../modele/blog/connexion_sql.php');

// On poste le nouveau billet
include_once('../../modele/blog/post_billet.php');
$post_billet = post_billet($_POST['titre_billet'], $_POST['contenu_billet'], $_SESSION['id']);

//On retourne sur la liste des billets
header('Location: ../../index.php');