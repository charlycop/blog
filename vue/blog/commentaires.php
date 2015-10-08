<!DOCTYPE HTML>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
<?php
    
?>

<?php 
    include ('vue/blog/header.php');

    $billet_id = (int) $_GET['billet'] 
?>       

        <h2 id="titre">Billet concerné</h2>
 
<!-- On affiche LE billet -->

<?php
include ('modele/blog/get_pseudo.php');
foreach($billets as $billet)
{
?>
<div class="news">
    <div class="billet_titre">
        <h3>
            <?php echo $billet['titre']; ?>
            <em> - <span>le <?php echo $billet['date_creation_fr']; ?> de 
            <?php 
                // j'appelle la fonction pour afficher le pseudo
                $pseudo_membre = get_pseudo($billet['id_membre']);
                echo $pseudo_membre['pseudo'];
            ?>
        </span></em>
        </h3>
    </div>
    
    <p>
    <?php echo $billet['contenu']; ?>
    <br />
    </p>

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
            <p><textarea id="contenu_commentaire" name="contenu_commentaire" required placeholder="Connectez-vous puis écrivez votre commentaire ici" cols="101" rows="10"></textarea></p>
            <input type="hidden" id="id_billet" name="id_billet" value="<?php echo $billet_id; ?>" />
            <div class="bouton"><input type="submit" value="Publier le commentaire"/></div>
        </form>
    </div>

</body>
</html>
