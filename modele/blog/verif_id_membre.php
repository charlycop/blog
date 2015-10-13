<?php
{
        function verif_id_membre($id_billet)
    {
        $id_billet = (int) $id_billet;
       
        global $bdd;       
        $req = $bdd->prepare('SELECT id_membre FROM billets WHERE id = "'.$id_billet.'"');
		$req->execute();
		$resultat = $req->fetch();

        return $resultat;
    }
}