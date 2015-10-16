<?php

function post_avatar($id_membre, $pic_type)

    {
        global $bdd;
        $req = $bdd->prepare('UPDATE membres SET avatar= :avatar WHERE id_membre= :id_membre');
        $req->execute(array(
			'avatar' => $pic_type,
			'id_membre' => $id_membre
			));
    return true;
    }