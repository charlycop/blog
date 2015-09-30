<?php
session_start(); // On démarre la session AVANT toute chose

include_once('modele/blog/connexion_sql.php');

if (!isset($_GET['billet']))
{
    include_once('controleur/blog/index.php');
}

else
{
	include_once('controleur/blog/commentaires.php');
}