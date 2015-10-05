<div id="shadowing_connexion"></div>
<div id="box_connexion">
  <span id="boxtitle_connexion"></span>

<!-- PARTIE CONNEXION -->

<div class="inscription">

<!-- Formulaire de connexion -->
        <h2 class="titre_inscription">Connexion</h2>
        <form action="controleur/blog/connexion.php" method="POST">  
            <p><input id="pseudo" name="pseudo" type="text" size="23" maxlength="40" placeholder="Pseudonyme" required /></p>
            <p><input id="mdp" name="mdp" type="password" size="23" maxlength="40" placeholder="Mot de passe" required /></p>
            <!--<p><label for="cookie">Rester connecté </label><input name="cookie" id="cookie" type="checkbox"/></p>-->
            <div class="bouton"><input type="submit" value="Se Connecter"/>
            <input type="button" name="cancel" value="Annuler" onclick="closebox_connexion()"></div>
        </form>
    </div>
</div>

<div id="shadowing_inscription"></div>
<div id="box_inscription">
  <span id="boxtitle_inscription"></span>
<!-- PARTIE INSCRIPTION -->

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
            <div class="bouton"><input type="submit" value="M'inscrire"/>
                <input type="button" name="cancel" value="Annuler" onclick="closebox_inscription()"></div>
        </form>
    </div>
</div>