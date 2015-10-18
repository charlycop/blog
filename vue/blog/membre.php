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
			
			<div class="divmembre">
				<p class="membre">
						<img class="avatar150" src="<?php echo $avatarmembre; ?>" />
					</p>
									<p class="membre">
					Pseudonyme : <?php echo $_SESSION['pseudo'] ?><br/>
					Email	   : <?php echo $all_infos_membre['email'] ?><br/>
					Date d'inscription : <?php echo $all_infos_membre['date_inscription_fr'] ?>
				</p>
						<p>Modifier votre avatar</p><form class="membre" enctype="multipart/form-data" action="controleur/blog/upload_avatar.php" method="post">
						<!-- MAX_FILE_SIZE doit précéder le champs input de type file -->
						<input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
						<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->  
						<input name="userfile" type="file" required /><br/>
						<input type="submit" value="Envoyer" />
						</form>

			</div>

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
            <em> - <span>le <?php echo $billet['date_billet']; ?></span></em>
        </h3>
    </div>

    <div class="billet">
        <div class="billet_auteur">
            <p><?php echo $_SESSION['pseudo']; ?><br/>
            <img src="<?php echo $avatarbillet; ?>" title="<?php echo ''.$_SESSION['pseudo'].''; ?>" /> </p>
        </div>
        <div class="billet_contenu">
            <?php echo $billet['contenu_billet']; ?>
        </div>
            
	        <br />
	        <a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a>(<?php 
	        //On compte le nombre de commentaire
	        $nb_commentaires = compte_commentaires($billet['id']);
	        echo $nb_commentaires['nb_commentaires']; ?>) - <a href="modifier_billet.php?billet=<?php echo $billet['id']; ?>">Modifier</a> - <a href="controleur/blog/delete_billet.php?billet=<?php echo $billet['id']; ?>">Supprimer</a>
   	</div>
</div>
		<?php
		}
		?>
    </body>
</html>