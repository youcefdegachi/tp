<?php 
    function verifierPairImpair($nombre){
        if($nombre % 2 == 0){
            echo $nombre ." est nombre est pair. <br> ";
        }else{
            echo $nombre . " est nombre est impair <br>";
        }
    }
    verifierPairImpair(4);
    verifierPairImpair(7);
    verifierPairImpair(10);

?>