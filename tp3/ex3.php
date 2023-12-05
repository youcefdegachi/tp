<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // $color = "rouge";
        // switch ($color){
        //     case 'rouge' :
        //         echo "votre color est rouge";
        //         break;
        //     case 'bleu' :
        //         echo "votre color est bleu";
        //         break;
        //     case 'vert' :
        //         echo "votre color est vert";
        //         break;
        //     default:
        //         echo "Votre couleur préférée n'est ni le rouge, ni le bleu, ni le vert !";
        //         break;
        //     }
    ?>

<?php
        $color = "rouge";
        if($color=='rouge')
            echo "votre color est rouge";
        elseif($color=='rouge')
            echo "votre color est bleu";
        elseif($color=='vert')
            echo "votre color est vert";
        else
            echo "Votre couleur préférée n'est ni le rouge, ni le bleu, ni le vert !";

    ?>

</body>
</html>