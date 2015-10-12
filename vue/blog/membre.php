<!DOCTYPE HTML>
    <head>
        <title>Mon blog - Espace membre</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="vue/blog/style.css" />
    </head>
        
    <body>
<?php	
	include ('header.php');
?>
<h2 id="titre">Mon super blog - Espace Membre</h2>

<div class="news">
	<h3>Vos informations</h3>
	<p>
		Pseudonyme : <?php echo $_SESSION['pseudo'] ?><br/>
		Email	   : <?php echo $all_infos_membre['email'] ?><br/>
		mot de passe : <?php echo $all_infos_membre['pass'] ?><br/>
		Date d'inscription : <?php echo $all_infos_membre['date_inscription_fr'] ?>
	</p>
</div>
   
    </body>
</html>