<?php
if (isset($_GET['billet']))

{
        function get_billets($billet_concerne, $offset, $limit)
    {
        global $bdd;
        $billet_concerne = (int) $_GET['billet'];
        $offset = (int) $offset;
        $limit = (int) $limit;
            
        $req = $bdd->prepare('SELECT    id AS id_billet,
								        membres.id_membre AS id_auteur_billet,
								        pseudo AS pseudo_billet,
								        titre,
								        contenu AS contenu_billet,
								        DATE_FORMAT(billets.date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_billet,
								        avatar
								FROM billets
								INNER JOIN membres ON 
										billets.id_membre=membres.id_membre 
								WHERE id="'.$billet_concerne.'" 
								ORDER BY billets.date_creation DESC LIMIT :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $billets = $req->fetchAll();

        return $billets;
    }
}

else
{
    function get_billets($offset, $limit)
    {
        global $bdd;
        $offset = (int) $offset;
        $limit = (int) $limit;
            
        $req = $bdd->prepare('SELECT    id AS id_billet,
								        membres.id_membre AS id_auteur_billet,
								        pseudo AS pseudo_billet,
								        titre,
								        contenu AS contenu_billet,
								        DATE_FORMAT(billets.date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_billet,
								        avatar
								FROM billets
								INNER JOIN membres ON 
										billets.id_membre=membres.id_membre 
								ORDER BY billets.date_creation DESC LIMIT :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $billets = $req->fetchAll();
        
        
        return $billets;
    }
}
