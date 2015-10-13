<?php
{
        function get_all_infos_membre($id_membre)
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT pass, email, DATE_FORMAT(date_inscription, \'%d-%m-%Y\') AS date_inscription_fr FROM membres WHERE id_membre = :id');
        $req->execute(array(
			'id' => $id_membre
		));
		$resultat = $req->fetch();

        return $resultat;
    }
}