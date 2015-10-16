<?php
{
    function post_commentaire($id_billet, $id_membre, $commentaire)
    {
        global $bdd;       
        $req = $bdd->prepare('INSERT INTO commentaires (id_billet, id_membre, commentaire, date_commentaire) VALUES (:id_billet, :id_membre, :commentaire, NOW()) ');
        $req->execute(array(
			'id_billet' => $id_billet,
			'id_membre' => $id_membre,
			'commentaire' => $commentaire
			));
    }
}