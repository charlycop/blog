<?php
        function delete_billet($id_billet)
    {
        $id_billet = (int) $id_billet;
        
        global $bdd;    
        $req = $bdd->prepare('DELETE FROM billets WHERE id = :id_billet');
		$req->execute(array(
		'id_billet' => $id_billet
		));

		//A ajouter pour les bases MyISAM (pas besoin avec InnoDB)
		$req = $bdd->prepare('DELETE FROM commentaires WHERE id_billet = :id_billet');
		$req->execute(array(
		'id_billet' => $id_billet
		));
    }
