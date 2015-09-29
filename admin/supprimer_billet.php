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

// Suppression du billet
$bdd->exec('DELETE FROM billets WHERE id = "'.$billet_id.'"');

header('Location: admin.php');

?>