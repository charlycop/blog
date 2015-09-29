<!DOCTYPE HTML>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
<?php $billet_id = (int) $_GET['billet'] ?>       

        <h2>Billet concerné</h2>
 
<!-- On affiche LE billet -->

<?php
foreach($billets as $billet)
{
?>
<div class="news">
    <h3>
        <?php echo $billet['titre']; ?>
        <em> - <span>le <?php echo $billet['date_creation_fr']; ?></span></em>
    </h3>
    
    <p>
    <?php echo $billet['contenu']; ?>
    <br />
    </p>

</div>
<?php
}
?>

        <h2>Commentaires du billet n°<?php echo $billet_id ?></h2>

<!-- On affiche les commentaires -->

<?php
foreach($commentaires as $commentaire)
{
?>

<div class="news">
    <h3>
        <?php echo $commentaire['auteur']; ?>
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
</body>
</html>
