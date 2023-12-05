<?php 
    function calculer($a,$b,$o){
        if ($o=="+"){
            return "Resulta : " .$a+$b;
        }elseif($o=="-"){
            return "Resulta : " .$a-$b;
        }elseif($o=="*"){
            return "Resulta : " .$a*$b;
        }elseif($o=="/"){
            if($b==0){
                return "Erreur division par zero";
            }else{
                return "Resulta : " .$a/$b;
            }
        }else{
            return "division error";
        }
    }

    echo calculer(1,2,"+") ."<br>";
    echo calculer(1,2,"-")."<br>";
    echo calculer(5,2,"*")."<br>";
    echo calculer(20,2,"/")."<br>";
    echo calculer(10,5,"3")."<br>";
?>