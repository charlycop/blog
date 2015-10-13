<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Espace membre</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
        <link rel="stylesheet" href="vue/blog/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css">
        <script src="vue/blog/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
        
    <body>
		<?php	
			include ('header.php');
		?>
		<h2 id="titre">Mon super blog - Espace Membre</h2>

		<div class="news">
			<h3>Vos informations</h3>
			<p>
				Pseudonyme : <?php echo $_SESSION['pseudo'] ?><br/>
				Email	   : <?php echo $all_infos_membre['email'] ?><br/>
				mot de passe : <?php echo $all_infos_membre['pass'] ?><br/>
				Date d'inscription : <?php echo $all_infos_membre['date_inscription_fr'] ?>
			</p>
		</div>

		<h2 id="titre">Mes billets</h2>

		<?php
		foreach($billets as $billet)
		{
		?>
		<div class="news">

		        <div class="billet_titre">
		        <h3>
		            <?php echo $billet['titre']; ?>
		            <em> - <span>le <?php echo $billet['date_creation_fr']; ?>
		        </span></em>
		        </h3>
		    </div>
		    
		    <p>
		    <?php echo $billet['contenu']; ?>
		    
		    <?php
		    // Je charge et j'appelle la fonction pour compter les commentaires
		    $nb_commentaires = compte_commentaires($billet['id']);
		    ?>

		    <br />
		    <a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a>(<?php echo $nb_commentaires['nb_commentaires']; ?>) - Modifier - <a href="controleur/blog/delete_billet.php?billet=<?php echo $billet['id']; ?>">Supprimer</a>
		    </p>
		</div>
		<?php
		}
		?>
    </body>
</html>