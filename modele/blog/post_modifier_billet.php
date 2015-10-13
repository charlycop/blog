<?php
{
        function post_modifier_billet($titrebillet, $contenubillet, $id_billet)
    {
        
        global $bdd;       
        $req = $bdd->prepare('UPDATE billets SET titre = :titre, contenu = :contenu WHERE id = :billet');
        $req->execute(array(
			'titre' => $titrebillet,
			'contenu' => $contenubillet,
			'billet' => $id_billet
			));
    }
}