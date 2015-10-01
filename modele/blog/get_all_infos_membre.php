<?php
{
        function get_all_infos_membre($id)
    {
        global $bdd;       
        $req = $bdd->prepare('SELECT pass, email, DATE_FORMAT(date_inscription, \'%d-%m-%Y\') AS date_inscription_fr FROM membres WHERE id_membre = :id');
        $req->execute(array(
			'id' => $id
		));
		$resultat = $req->fetch();

        return $resultat;
    }
}