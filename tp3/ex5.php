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
        $note = rand(1,20);
        echo "note est ".$note."<br>";
        switch ($note){
            case ($note >=1 && $note< 10) : #($note< 10)
                echo "Insuffisant";
                break;
            case ($note >=10 && $note<= 14) : #($note< 14)
                echo "Bien";
                break;
            case ($note >=15 && $note<= 17) : #($note< 17)
                echo "Très bien";
                break;
            case ($note >=18 && $note<= 20) : #($note< 20)
                    echo "adulte";
                    break;
            default:
                echo "other case";
                break;
            }
    ?>


</body>
</html>