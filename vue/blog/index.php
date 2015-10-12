<!DOCTYPE HTML>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
<?php
    include ('header.php');
?>
        
<h1 id="titre">Mon super blog !</h1>
 
<?php
include ('modele/blog/compte_commentaires.php');
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
    
    <?php
    // Je charge et j'appelle la fonction pour compter les commentaires
    $nb_commentaires = compte_commentaires($billet['id']);
    ?>

    <br />
    <a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a>(<?php echo $nb_commentaires['nb_commentaires']; ?>)
    </p>
</div>
<?php
}
?>
</body>
</html>
