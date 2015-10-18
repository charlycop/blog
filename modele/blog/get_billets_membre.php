<?php
        function get_billets_membre($id_membre, $offset, $limit)
    {
        global $bdd;
        $id_membre = (int) $_SESSION['id'];
        $offset = (int) $offset;
        $limit = (int) $limit;
            
        $req = $bdd->prepare('SELECT id, titre, contenu AS contenu_billet, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_billet FROM billets WHERE id_membre="'.$id_membre.'" ORDER BY date_creation DESC LIMIT :offset, :limit');
        $req->bindParam(':offset', $offset, PDO::PARAM_INT);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $billets = $req->fetchAll();

        return $billets;
    }