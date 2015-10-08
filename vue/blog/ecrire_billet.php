<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Nouveau Billet</title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="vue/blog/style.css" />
         <script src="ckeditor/ckeditor.js"></script>
        <script>tinymce.init({selector:'textarea'});</script> 
    </head>
        
    <body>
<?php
    include ('vue/blog/header.php');
?>
        
<h1 id="titre">Mon super blog ! - Rédiger un billet</h1>

<!-- Formulaire -->   
    <div class="nouveau_billet">
        <h2 class="titre_inscription">Nouveau Billet de <?php echo $_SESSION['pseudo'] ?></h2>
        <form action="controleur/blog/ecrire_billet.php" method="POST">  
            <p><input id="titre_billet" name="titre_billet" type="text" size="100" maxlength="100" placeholder="Titre du billet" required /></p>
            <p><textarea id="contenu_billet" name="contenu_billet" placeholder="Ecrivez votre billet ici" cols="101" rows="10"></textarea></p>
             <script>
                // Replace the <textarea id="contenu_billet"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'contenu_billet' );
            </script>
            <div class="bouton"><input type="submit" value="Publier le billet"/></div>
        </form>
    </div>

</body>
</html>