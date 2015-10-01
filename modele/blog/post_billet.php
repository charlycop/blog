<?php
{
        function post_billet($titrebillet, $contenubillet, $id_membre)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO billets (titre, contenu, id_membre, date_creation) VALUES (:titre, :contenu, :id_membre, NOW()) ');
        $req->execute(array(
			'titre' => $titrebillet,
			'contenu' => $contenubillet,
			'id_membre' => $id_membre
			));
    }
}