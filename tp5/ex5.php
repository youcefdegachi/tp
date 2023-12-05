<?php 
    function findMax($array){
        if(count($array)==0){
            echo "Le tableau est vide, impossible de trouver un maximum.";
        }else{
            echo  "Le maximum dans le tableau est : " .max($array);
        }
    }
    $donnees = array(15, 20, 19, 5, 14, 12, 10, 17, 4);
    findMax($donnees)
?>