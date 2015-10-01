<?php
	session_start(); // On démarre la session AVANT toute chose

	INCLUDE_ONCE('modele/blog/connexion_sql.php'); // Connexion à la base
	
	INCLUDE_ONCE ('controleur/blog/membre.php');