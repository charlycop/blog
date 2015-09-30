<?php
	session_start(); // On démarre la session AVANT toute chose
	session_destroy();

	header('Location: index.php');
?>