<!DOCTYPE HTML>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
        <script src="vue/blog/ckeditor/ckeditor.js"></script>

    </head>
        
    <body>

<?php 
    include ('header.php');
?> 

<h2 id="titre">Modifier un billet</h2>

    <div class="nouveau_billet">
        <h2 class="titre_inscription">Modification d'un billet</h2>
        <form action="controleur/blog/post_modifier_billet.php" method="POST">  
            <p><input id="titre_billet" name="titre_billet" type="text" size="100" maxlength="100"  required value="<?php echo $billet['titre']; ?>"/></p>
            <p><textarea id="contenu_billet" name="contenu_billet" cols="101" rows="10"><?php echo $billet['contenu']; ?></textarea></p>
             <script>
                // Replace the <textarea id="contenu_billet"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'contenu_billet');
            </script>
           <label name="billet_id"><input name="billet_id" id="billet_id" type="hidden" value="<?php echo $id_billet ?>"/></label>
	<p><input type="submit" value="Mettre à jour"/> - <a href="membre.php">Annuler</a></p>
        </form>
    </div>


</body>
</html>
