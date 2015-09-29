<?php
include_once('../../modele/blog/connexion_sql.php');

// Sécurisation des données
$pass_hache = sha1($_POST['mdp']);
$pseudo = htmlspecialchars($_POST['pseudo']);

// Vérification de la concordance pseudo/mot de passe
include_once ('../../modele/blog/post_connexion.php');
$connexion = post_connexion($pseudo,$pass_hache);

// On renvoie sur le formulaire ou la page membre
if (!$connexion)

{
	header('Location: ../../connexion.php?statut=NOK');
}

else
{
	// On démarre la session
	session_start();
    $_SESSION['id'] = $connexion['id_membre'];
    $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
    echo 'Vous êtes connecté !';

    // On redirige sur la page membre
	header('Location: ../../membre.php');
}