<!DOCTYPE HTML>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        
 
<?php
foreach($billets as $billet)
{
?>
<div class="news">
    <p id="normal">Derniers billets du blog :</p>
    <h3>
        <?php echo $billet['titre']; ?>
        <em> - <span>le <?php echo $billet['date_creation_fr']; ?></span></em>
    </h3>
    
    <p>
    <?php echo $billet['contenu']; ?>
    <br />
    <a href="commentaires.php?billet=<?php echo $billet['id']; ?>">Commentaires</a>
    </p>
</div>
<?php
}
?>
</body>
</html>
