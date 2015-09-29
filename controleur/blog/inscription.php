<?php

// Connexion à la bdd
include_once('../../modele/blog/connexion_sql.php');

// Récupération et sécurisation des données du formulaire
$pseudo_checked = htmlspecialchars($_POST['pseudo']);
$mdp_hache = sha1($_POST['mdp']);
$mdp2_hache = sha1($_POST['mdp2']);
$email_checked = htmlspecialchars($_POST['email']);

// On vérifie si le pseudo existe déjà dans la base
include_once('../../modele/blog/compte_pseudo.php');
$nb_pseudo_base = compte_pseudo($pseudo_checked);

if ($nb_pseudo_base['nb_pseudo'] == 0)
{
	//On vérifie si mdp et mdp2 sont identiques
	if ($mdp_hache == $mdp2_hache)
	{
		//Tout est OK, on enregistre dans la base
		include_once('../../modele/blog/post_newmembre.php');
		$post_newmembre = post_newmembre($pseudo_checked, $mdp_hache, $email_checked);
		header('Location: ../../inscription.php?statut=OK');
	}

	else
	{
		//Le pseudo est libre, mais les mdp ne sont pas identiques
		header('Location: ../../inscription.php?statut=mdpdifferents');
	}
}

else
{
	//Un membre existe déjà avec ce pseudonyme
	header('Location: ../../inscription.php?statut=pseudoexiste');
}