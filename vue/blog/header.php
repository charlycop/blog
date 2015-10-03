<head>
    <script src="js/lightbox-form.js" type="text/javascript"></script>
</head>
<div class="header_master">
    <div id="header">
        <div id="header_left">
            <a href="http://localhost/cours_php/blog/index.php">Voir les billets</a> 

            <?php
            if (isset($_SESSION['id']))
            {
                { ?>
                 - <a href="http://localhost/cours_php/blog/ecrire_billet.php">Ecrire un billet</a>
                <?php   } 
            }

            else
            {

            }
            ?>

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
                // On charge les formulaire en lightbox
                INCLUDE_ONCE ('/vue/blog/connexion_inscription_lightbox.php');

        		{ ?>
        		<a href="#" onclick="openbox_connexion('Connectez-vous', 0)">Connectez-vous</a> ou <a href="#" onclick="openbox_inscription('Inscrivez-vous', 0)">Inscrivez-vous</a>
        		<?php  	} 
        	}
        	?>
        </div>
    </div> 
</div>