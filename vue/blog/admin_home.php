<!DOCTYPE HTML>
    <head>
        <title>Admin - Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
        <h1>Backoffice - Mon super blog !</h1>
        <p>Les billets du blog :</p>
 
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
    <a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a> - <a href="#">Modifier</a> - <a href="">Supprimer</a>
    </p>
</div>
<?php
}
?>
</body>
</html>
