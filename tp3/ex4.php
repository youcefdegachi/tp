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
        $age = rand(1,100);
        echo "age est ".$age."<br>";
        switch ($age){
            case ($age >=1 && $age< 10) : #($age< 10)
                echo "enfant";
                break;
            case ($age >=10 && $age<= 19) : #($age< 19)
                echo "adolescent";
                break;
            case ($age >=20 && $age<= 39) : #($age< 39)
                echo "jeune";
                break;
            case ($age >=40 && $age<= 59) : #($age< 49)
                    echo "adulte";
                    break;
            case ($age >=60) : #($age> 60)
                echo "vieux";
                break;
            default:
                echo "other case";
                break;
            }
    ?>


</body>
</html>