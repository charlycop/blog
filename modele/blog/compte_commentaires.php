<?php
{
    function compte_commentaires($id_billet)
    {
        global $bdd;
        $id_billet = (int) $id_billet;

        $req = $bdd->prepare('SELECT COUNT(id) AS nb_commentaires FROM commentaires WHERE id_billet = :id_billet');
        $req->execute(array(
            'id_billet' => $id_billet
        ));
        $resultat = $req->fetch();
    
        return $resultat;
    }
}