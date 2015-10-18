<head>
    <script src="js/lightbox-form.js" type="text/javascript"></script>
</head>
<div class="header_master">
    <div id="header">
        <div id="header_left">
            <a href="index.php">Voir les billets</a> 
            <?php
                // On récupère les avatars
                if (isset($_SESSION['avatar']))
                {
                    $avatarheader = 'vue/blog/img/avatars/'.$_SESSION['id'].'_30x30'.$_SESSION['avatar'].'';
                }

                else
                {
                    $avatarheader = 'vue/blog/img/avatars/avatar_30x30.png';
                } ?>

            <?php
            if (isset($_SESSION['id']))
            {
                { ?>
                 - <a href="ecrire_billet.php">Ecrire un billet</a> - <a href="onlinechat.php">Chat en direct</a>
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
        		<div id="avatartop"><img class="avatar30" src="<?php echo $avatarheader; ?>" /></div><a href="membre.php">Espace membre</a> - Bienvenue <?php echo $_SESSION['pseudo']; ?> - <a href="deconnexion.php">Se déconnecter</a>
        		<?php  	} 
        	}

        	else
        	{  
                // On charge les formulaire en lightbox
                INCLUDE_ONCE ('vue/blog/connexion_inscription_lightbox.php');

        		{ ?>
        		<a href="#" onclick="openbox_connexion('Connectez-vous', 0)">Connectez-vous</a> ou <a href="#" onclick="openbox_inscription('Inscrivez-vous', 0)">Inscrivez-vous</a>
        		<?php  	} 
        	}
        	?>
        </div>
    </div> 
</div>