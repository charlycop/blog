<?php

function get_commentaires($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
    $billet_concerne = (int) $_GET['billet'];
        
    $req = $bdd->prepare('SELECT commentaires.id AS id_commentaire, 
    							 commentaires.id_membre AS id_commentateur,
    							 commentaire,
    							 DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_commentaire_fr,
    							 avatar AS avatar_commentateur,
    							 pseudo AS pseudo_commentateur
    					  FROM commentaires
						  INNER JOIN membres ON 
										commentaires.id_membre=membres.id_membre
  						  WHERE id_billet="'.$billet_concerne.'"
  						  ORDER BY date_commentaire DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $commentaires = $req->fetchAll();
    
    return $commentaires;
}