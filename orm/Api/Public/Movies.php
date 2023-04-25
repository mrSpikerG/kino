<?php

use orm\Controllers\KinoController;
use orm\Controllers\MemberController;
use orm\Controllers\RoleController;
use orm\db;

include_once __DIR__."/../../Controllers/RoleController.php";
include_once __DIR__."/../../Controllers/MemberController.php";
include_once __DIR__."/../../Controllers/KinoController.php";
include_once __DIR__."/../../db.php";

if($_SERVER["REQUEST_METHOD"] == 'GET'){
    if(isset($_GET['getByAuthor'])) {
        if(isset($_GET['author'])) {
            $roleCont = new RoleController(db::getConn());
            $qerry = $roleCont->SelectByName("Author");

            $curRole=0;
            foreach ($qerry as $iter) {
                $curRole = $iter['Id'];
            }

            $kinoCont = new KinoController(db::getConn());
            $membCont = new MemberController(db::getConn());
            $qerry2 = $membCont->SelectByRole($curRole);
            foreach ($qerry2 as $iter) {
                if($iter['Fullname']==$_GET['author']){
                   $querry3 = $kinoCont->SelectById($iter["KinoId"]);
                    foreach ($querry3 as $kino) {
                        echo $kino['LocalisedName'];
                    }
                }


            }

        }else{
            echo '404';
            return;
        }

        return;
    }

}
