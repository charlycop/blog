<?php
{
        function post_newmembre($pseudo_newmembre, $mdp_hache_newmembre, $email_newmembre)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, NOW()) ');
        $req->execute(array(
			'pseudo' => $pseudo_newmembre,
			'pass' => $mdp_hache_newmembre,
			'email' => $email_newmembre
			));
    }
}