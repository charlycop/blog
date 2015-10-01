<?php
{
        function get_pseudo($id_membre)
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT pseudo FROM membres WHERE id_membre = :id_membre');
        $req->execute(array(
			'id_membre' => $id_membre
		));
		$resultat = $req->fetch();

        return $resultat;
    }
}