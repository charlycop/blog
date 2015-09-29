<?php

include_once('modele/blog/connexion_sql.php');

if (!isset($_GET['billet']))
{
    include_once('controleur/blog/admin_home.php');
}

else
{
	$billet_concerne = (int) $_GET['billet'];
	header('Location: admin_commentaires.php?billet=' . ($billet_concerne) . '');
}