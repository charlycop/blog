<?php
{
    function compte_pseudo($pseudo_acompter)
    {
        global $bdd;
        $req = $bdd->prepare('SELECT COUNT(pseudo) AS nb_pseudo FROM membres WHERE pseudo="'.$pseudo_acompter.'"');
        $req->execute();
        $nb_pseudo_base = $req->fetch();
    
        return $nb_pseudo_base;
    }
}