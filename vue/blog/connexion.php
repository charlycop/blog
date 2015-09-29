<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Se connecter</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="../../vue/blog/style.css" />
    </head>
        
    <body>
    <h1>Mon super blog - Espace membre</h1>

    <div class="inscription">

<!-- Affichage d'un message d'erreur ou redirection vers la page membre  -->
    <?php

        if (!isset($resultat))
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            session_start();
            $_SESSION['id'] = $resultat['id_membre'];
            $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
            echo 'Bonjour ' . $_SESSION['pseudo'] . ', tu es connecté !';
        }
    ?>

<!-- Formulaire de connexion -->
        <h2 class="titre_inscription">Se connecter</h2>
        <form action="controleur/blog/connexion.php" method="POST">  
            <p><input id="pseudo" name="pseudo" type="text" size="23" maxlength="40" placeholder="Pseudonyme" required /></p>
            <p><input id="mdp" name="mdp" type="password" size="23" maxlength="40" placeholder="Mot de passe" required /></p>
            <p><label for="cookie">Rester connecté </label><input name="cookie" id="cookie" type="checkbox"/></p>
            <div class="bouton"><input type="submit" value="Se Connecter"/></div>
        </form>
    </div>

    </body>
</html>