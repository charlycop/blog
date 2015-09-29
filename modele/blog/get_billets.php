<?php
if (isset($_GET['billet']))

{
        function get_billets($billet_concerne, $offset, $limit)
    {
        global $bdd;
        $billet_concerne = (int) $_GET['billet'];
        $offset = (int) $offset;
        $limit = (int) $limit;
            
        $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id="'.$billet_concerne.'" ORDER BY date_creation DESC LIMIT :offset, :limit');
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
            
        $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $billets = $req->fetchAll();
        
        
        return $billets;
    }
}