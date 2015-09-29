<?php
include_once('../../modele/blog/connexion_sql.php');

// Hachage du mot de passe
$pass_hache = sha1($_POST['mdp']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id_membre FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => htmlspecialchars($_POST['pseudo']),
    'pass' => $pass_hache));

$resultat = $req->fetch();
return $resultat;

include_once('connexion.php');


/*if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id_membre'];
    $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
    echo 'Vous êtes connecté !';
}*/