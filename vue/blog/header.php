<div class="header_master">
    <div id="header">
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