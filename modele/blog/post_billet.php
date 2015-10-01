<?php
{
        function post_billet($titrebillet, $contenubillet)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO billets (titre, contenu, date_creation) VALUES (:titre, :contenu, NOW()) ');
        $req->execute(array(
			'titre' => $titrebillet,
			'contenu' => $contenubillet
			));
    }
}