<div id="shadowing"></div>
<div id="box">
  <span id="boxtitle"></span>
  <div class="inscription">

<!-- Affichage d'un message -->
    <?php
        if (!isset($_GET['statut'])) 
        {}
        else
        {
            echo '<p class="sub_error">Le mot de passe et le pseudonyme ne correspondent pas, veuillez recommencer</p>';
        }
    ?>

<!-- Formulaire de connexion -->
        <h2 class="titre_inscription">Se connecter</h2>
        <form action="controleur/blog/connexion.php" method="POST">  
            <p><input id="pseudo" name="pseudo" type="text" size="23" maxlength="40" placeholder="Pseudonyme" required /></p>
            <p><input id="mdp" name="mdp" type="password" size="23" maxlength="40" placeholder="Mot de passe" required /></p>
            <!--<p><label for="cookie">Rester connecté </label><input name="cookie" id="cookie" type="checkbox"/></p>-->
            <div class="bouton"><input type="submit" value="Se Connecter"/>
            <input type="button" name="cancel" value="Annuler" onclick="closebox()"></div>
        </form>
    </div>
</div>