<?php
session_start(); // On démarre la session AVANT toute chose

include_once('../../modele/blog/connexion_sql.php');

$id_billet = (int) $_GET['billet'];

// Vérification si le billet appartient au membre
include_once ('../../modele/blog/verif_id_membre.php');
$id_membre = verif_id_membre($id_billet);

// On supprime ou on affiche un message d'erreur
if ($id_membre['id_membre'] == $_SESSION['id'])
	{
		include_once ('../../modele/blog/delete_billet.php');
		delete_billet($id_billet);

		header('Location: ../../membre.php');
	}

	else
	{
		echo 'Il est interdit de supprimer un billet que vous n\'avez pas ecrit !';
	}