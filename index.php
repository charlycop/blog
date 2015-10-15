<?php
session_start(); // On démarre la session AVANT toute chose

include_once('modele/blog/connexion_sql.php');

if (!isset($_GET['billet']))
{
    	include_once('controleur/blog/index.php');
}

else
{
	$billet_concerne = (int) $_GET['billet'];
	header('Location: commentaires.php?billet=' . ($billet_concerne) . '');
}
