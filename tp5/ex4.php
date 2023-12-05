<?php 
    function verificationPassword($psw){
        if (strlen($psw>=8)){
            return true;
        }else{
            return false;
        }
    }
    
    $tr=verificationPassword("1234567890");
    if ($tr==true){
        echo "Le mot de passe est valide";
    }else{
        echo "Le mot de passe n'est pas valide";
    }

?>