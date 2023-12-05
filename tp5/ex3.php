<?php 
    $donnees = array(15, 20, 19, 5, 14, 12, 10, 17, 4);
    function calculerMoyenne($donnees){
        $som=0;
        foreach ($donnees as $value){
            $som +=$value;
        }  
    $resultat=$som/count($donnees);
    echo "La moyenne est : ".$resultat;
    // array_sum($donnees)/count($donnees);
    }
    calculerMoyenne($donnees);
?>