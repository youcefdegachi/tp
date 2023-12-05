<?php 
    $nombre = array(5,10,15,20,25);
    function calculerSommeTableau($nombre){
        $sum=0;
        for ($i = 0; $i < count($nombre); $i++) {
            $sum = $sum+ $nombre[$i];
        }
        return $sum;
        
    }

    echo calculerSommeTableau($nombre);
?>