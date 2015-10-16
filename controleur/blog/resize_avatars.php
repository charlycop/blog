<?php

//On appelle la fonction
include_once ('../../modele/blog/image_resize.php');

//On créée les différentes tailles d'avatars
$uploaddir = '../../vue/blog/img/avatars/';
$pic_type = strtolower(strrchr(basename($_FILES['userfile']['name']),"."));
$avatar30=image_resize($uploadfile, ''.$uploaddir.''.$_SESSION['id'].'_30x30'.$pic_type.'', 30, 30, 1);
$avatar85=image_resize($uploadfile, ''.$uploaddir.''.$_SESSION['id'].'_85x85'.$pic_type.'', 85, 85, 1);
$avatar150=image_resize($uploadfile, ''.$uploaddir.''.$_SESSION['id'].'_150x150'.$pic_type.'', 150, 150, 1);

//On modifie la variable définitivement pour les prochaines sessions
	include_once ('../../modele/blog/post_avatar.php');
	$post_avatar = post_avatar($_SESSION['id'], $pic_type);