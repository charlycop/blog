<?php

// Récupération de la valeur $_GET
$id_billet = (int) $_GET['billet'];

// Vérification si le billet appartient au membre
include_once ('modele/blog/verif_id_membre.php');
$id_membre = verif_id_membre($id_billet);

// On modifie ou on affiche un message d'erreur
if ($id_membre['id_membre'] == $_SESSION['id'])
	{
		// On demande le billet en question
		include_once('modele/blog/get_billets.php');
		$billets = get_billets($id_billet, 0, 1);

		// On effectue du traitement sur les données (contrôleur)
		// Ici, on doit surtout sécuriser l'affichage
		foreach($billets as $cle => $billet)
		{
		    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
		    $billets[$cle]['contenu_billet'] = $billet['contenu_billet'];
		}

		// On affiche la page (vue)
		include_once('vue/blog/modifier_billet.php');
	}

	else
	{
		echo 'Il est interdit de modifier un billet que vous n\'avez pas ecrit !';
	}


