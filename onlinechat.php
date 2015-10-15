<?php
session_start(); // On démarre la session AVANT toute chose

if (isset($_SESSION['id']))
{
	include_once('vue/blog/onlinechat.php');
}

else
{
	header('Location: index.php');
}