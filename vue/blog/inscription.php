<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Devenir membre</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
    <h1>Mon super blog - Devenir Membre</h1>

    <div class="inscription">

<!-- Affichage d'un message d'erreur ou redirection vers la page membre -->
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
    ?>

<!-- Formulaire d'inscription -->
        <h2 class="titre_inscription">Inscription</h2>
        <form action="controleur/blog/inscription.php" method="POST">  
            <p><input id="pseudo" name="pseudo" type="text" size="23" maxlength="40" placeholder="Votre pseudonyme" required /></p>
            <p><input id="mdp" name="mdp" type="password" size="23" maxlength="40" placeholder="Mot de passe" required /></p>
            <p><input id="mdp2" name="mdp2" type="password" size="23" maxlength="40" placeholder="Répétez le mot de passe" required /></p>
            <p><input id="email" name="email" type="email" size="23" maxlength="40" placeholder="Votre email" required /></p>
            <div class="bouton"><input type="submit" value="M'inscrire"/></div>
        </form>
    </div>

    </body>
</html>
