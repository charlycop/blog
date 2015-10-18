<!DOCTYPE HTML>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
        <link rel="stylesheet" href="vue/blog/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css">
        <script src="vue/blog/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
        
    <body>

<?php 
    include ('header.php');
    $billet_id = (int) $_GET['billet'] 
?>       

        <h2 id="titre">Billet concerné</h2>
 
<!-- On affiche LE billet -->

<?php
include ('modele/blog/get_pseudo.php');
foreach($billets as $billet)
{
?>
<!-- <div class="news">
    <div class="billet_titre">
        <h3>
            <?php echo $billet['titre']; ?>
            <em> - <span>le <?php echo $billet['date_billet']; ?> de 
            <?php 
                echo $billet['pseudo_billet'];
            ?>
        </span></em>
        </h3>
    </div>
    
    <p>
    <?php echo $billet['contenu_billet']; ?>
    <br />
    </p>

</div> -->

<div class="news">
    <div class="billet_titre">
        <h3>
            <?php echo $billet['titre']; ?>
            <em> - <span>le <?php echo $billet['date_billet']; ?></span></em>
        </h3>
    </div>

    <div class="billet">
        <div class="billet_auteur">
            <p><?php echo $billet['pseudo_billet']; ?><br/>
            <?php
            if (isset($billet['avatar']))
            {
                $avatarbillet = 'vue/blog/img/avatars/'.$billet['id_auteur_billet'].'_85x85'.$billet['avatar'].'';
            }

            else
            {
                $avatarbillet = 'vue/blog/img/avatars/avatar_85x85.png';
            }
            ?> 
            
            <img src="<?php echo $avatarbillet; ?>" title="<?php echo ''.$billet['pseudo_billet'].''; ?>" /> </p>
        </div>
        <div class="billet_contenu">
            <?php echo $billet['contenu_billet']; ?>
        </div>
    </div>
</div>

<?php
}
?>

    <h2>Nombre de commentaire(s) : <?php echo $nb_commentaire['nb_commentaires'] ?></h2>

<!-- On affiche les commentaires -->

<?php

foreach($commentaires as $commentaire)
{
?>

<div class="news">
    <h3>
        <?php 
            // j'appelle la fonction pour afficher le pseudo
            $pseudo_membre = get_pseudo($commentaire['id_membre']);
            echo $pseudo_membre['pseudo'];
        ?>
           
        <em>- <span>le <?php echo $commentaire['date_commentaire_fr']; ?></span></em>
    </h3>
    
    <p>
    <?php echo $commentaire['commentaire']; ?>
    <br />
    </p>

</div>

<?php
}
?>

<!-- On affiche le formulaire pour ajouter un commentaire -->  
    <div class="nouveau_billet">
        <h2 class="titre_inscription">Nouveau commentaire</h2>
        <form action="controleur/blog/ecrire_commentaire.php" method="POST">  
            <p><textarea id="contenu_commentaire" name="contenu_commentaire" required placeholder="Connectez-vous puis écrivez votre commentaire ici" cols="90" rows="10"></textarea></p>
            <input type="hidden" id="id_billet" name="id_billet" value="<?php echo $billet_id; ?>" />
            <input type="hidden" id="titre_billet" name="titre_billet" value="<?php echo $billet['titre']; ?>" />
            <input type="hidden" id="id_auteur" name="id_auteur" value="<?php echo $billet['id_auteur_billet']; ?>" />
            <div class="bouton"><input type="submit" value="Publier le commentaire"/></div>
        </form>
    </div>

</body>
</html>
