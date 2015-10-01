<div class="header_master">
    <div id="header">
        <div id="header_left">
            <a href="http://localhost/cours_php/blog/index.php">Accueil<a>
        </div>

        <div id="header_right">
        	<?php
        	if (isset($_SESSION['id']))
        	{
        		{ ?>
        		<a href="membre.php">Espace membre</a> - Bienvenue <?php echo $_SESSION['pseudo']; ?> - <a href="deconnexion.php">Se déconnecter</a>
        		<?php  	} 
        	}

        	else
        	{
        		{ ?>
        		<a href="connexion.php">Connectez-vous</a> ou <a href="inscription.php">Inscrivez-vous</a>
        		<?php  	} 
        	}
        	?>
        </div>
    </div> 
</div>