<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Backoffice - Mon super blog</title>
		<link rel="stylesheet" href="../vue/blog/style.css" />
    </head>
	
	<body>
	<h1>Backoffice - Mon super blog</h1>
	<p>Les billets du blog :</p>

<div class="news">

<!-- Récupération des billets --> 
	<?php
		// Connexion à la base "blog"
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
			}
			catch (Exception $e)
			{
			        die('Erreur : ' . $e->getMessage());
			}
			
		// Récupération des billets dans la base
			$donnees = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, "%d/%m/%Y") AS date, DATE_FORMAT(date_creation, "%Hh%imin%ss") AS hour FROM billets ORDER BY date_creation DESC');

		// On place les données dans un array
			while ($billets = $donnees->fetch())

		// On affiche les billets
		{
			echo '<h3>' . (htmlspecialchars($billets['titre'])) . '<em>, le ' . ($billets['date']) . ' à ' .($billets['hour']) . '</em></h3>';
			echo '<p>' . nl2br(htmlspecialchars($billets['contenu'])) . '<br/>';
			echo '<a href="commentaires.php?billet_id=' . ($billets['id']) . '">Commentaires</a> - <a href="modifier_billet.php?billet_id=' . ($billets['id']) . '">Modifier</a> - <a href="supprimer_billet.php?billet_id=' . ($billets['id']) . '">Supprimer</a></p>';
		}

		$donnees->closeCursor();

	?>

</div>
<div>	
	<?php 


			// Comptage du nombre de billets
		$req = $bdd->query('SELECT COUNT(*) AS nb_billets FROM billets');
		$billets = $req->fetch();


   	// Affichage du nombre de page pour tester, c'est OK
			{
				echo 'Nb total de billets : ' . $billets['nb_billets'] . '';
			}
			
	?>
</div>



</body>
</html>