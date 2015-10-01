<?php

// On récupères les infos du membre
include_once('modele/blog/get_all_infos_membre.php');
$all_infos_membre = get_all_infos_membre($_SESSION['id']);

// On affiche la page (vue)
include_once('vue/blog/membre.php');