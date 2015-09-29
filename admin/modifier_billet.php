<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
		<title>Backoffice - Mon super blog</title>
		<link rel="stylesheet" href="../style_blog.css" />
    </head>
	
	<body>
	<h1>Modifier un billet - Mon super blog</h1>

	<div class="news">

<!-- Récupération du billet --> 
	<?php

		// Récupération de la valeur $_GET
		$billet_id = (int) $_GET['billet_id'];
		
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
			$donnees = $bdd->query('SELECT id, titre, contenu, date_creation FROM billets WHERE id="'.$billet_id.'"');

		// On place les données dans un array
			$billets = $donnees->fetch();
		?>
	</div>
<!-- On affiche les informations du billet dans un formulaire -->

<div>
<form action="modifier_billet_post.php" method="POST"> 
<fieldset>
	<legend>Modifiez les champs désirés</legend>
	<p><label name="titre">Titre : <input name="titre" id="titre" type="text" size="50" value="<?php echo (htmlspecialchars($billets['titre'])) ?>"/></label></p>
	<p><label name="contenu">Contenu du billet :<br/><textarea name="contenu" id="contenu" rows="10" cols="42"><?php echo (htmlspecialchars($billets['contenu'])) ?></textarea></label></p>
	<p><label name="datetime">Horodatage : <input name="datetime" id="datetime" type="text" value="<?php echo ($billets['date_creation']) ?>"/></label></p>
	<label name="billet_id"><input name="billet_id" id="billet_id" type="hidden" value="<?php echo $billet_id ?>"/></label>
	<p><input type="submit" value="Mettre à jour"/> - <a href="admin.php">Annuler</a></p>
</fieldset>
</form>
</div>


</body>
</html>