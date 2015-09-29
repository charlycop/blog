<?php
{
        function post_connexion($pseudo_membre, $mdp_hache_membre)
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT id_membre FROM membres WHERE pseudo = :pseudo AND pass = :pass');
        $req->execute(array(
			'pseudo' => $pseudo_membre,
			'pass' => $mdp_hache_membre
		));
		$resultat = $req->fetchAll();
       return $resultat;
    }
}