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
?>
        
<h1 id="titre">Mon super blog !</h1>
 
<?php
    include ('modele/blog/compte_commentaires.php');

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
            
            <br />
            <a href="commentaires.php?billet=<?php echo $billet['id_billet']; ?>">Commentaires</a>(<?php 
            //On compte le nombre de commentaire
            $nb_commentaires = compte_commentaires($billet['id_billet']);
            echo $nb_commentaires['nb_commentaires']; ?>)
    </div>
</div>
<?php
}
?>
</body>
</html>
