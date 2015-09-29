<?php

//Traitement du formulaire
	
	if (!empty($_POST['contenu']) AND !empty($_POST['titre']) AND !empty($_POST['datetime']))

	{
		// Connexion à la base "blog"
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
			}
			catch (Exception $e)
			{
			        die('Erreur : ' . $e->getMessage());
			}

			// Replacement des données du formulaire dans la base
			$req = $bdd->prepare('UPDATE billets SET titre = :nvtitre, contenu = :nvcontenu, date_creation = :nvdate_creation WHERE id = "'.$_POST['billet_id'].'"');

$req->execute(array(
	'nvtitre' => $_POST['titre'],
	'nvcontenu' => $_POST['contenu'],
	'nvdate_creation' => $_POST['datetime']
	));
	}

header('Location: modifier_billet.php?billet_id=' . ($_POST['billet_id']) . '');

?>