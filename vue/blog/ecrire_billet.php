<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Nouveau Billet</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
<?php
    include ('vue/blog/header.php');
?>
        
<h1 id="titre">Mon super blog ! - Rédiger un billet</h1>
        
    <div class="nouveau_billet">

<!-- Affichage d'un message d'erreur ou redirection vers la page membre 
    <?php
        if (!isset($_GET['statut'])) 
        {}
        else
        {
            if ($_GET['statut'] == "mdpdifferents") 
            {
                echo '<p class="sub_error">Le pseudonyme que vous avez choisi est disponible, mais les deux mots de passe ne sont pas identique, veuillez recommencer</p>';
            }
            else
                {
                    if ($_GET['statut'] == "pseudoexiste")
                    {
                        echo '<p class="sub_error">Le pseudonyme que vous avez choisi n\'est plus disponible, veuillez en choisir un autre</p>';
                    }
                    else
                    {
                        // On redirige sur l'accueil
                        header('Location: index.php');
                    }
                }
        }
    ?> -->

<!-- Formulaire -->
        <h2 class="titre_inscription">Nouveau Billet de <?php echo $_SESSION['pseudo'] ?></h2>
        <form action="controleur/blog/ecrire_billet.php" method="POST">  
            <p><input id="titre_billet" name="titre_billet" type="text" size="100" maxlength="100" placeholder="Titre du billet" required /></p>
            <p><textarea id="contenu_billet" name="contenu_billet" required placeholder="Ecrivez votre billet ici" cols="101" rows="10"></textarea></p>
            <div class="bouton"><input type="submit" value="Publier le billet"/></div>
        </form>
    </div>

</body>
</html>