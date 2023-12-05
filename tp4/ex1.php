<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:hover{
            background:#f88379;
        }
        table{
            background-color:FFF;
            border-collapse: collapse;
        }
        td{
            text-align:center;padding:15px;
            border-bottom:1px solid #CCCCCC;
        }
    </style>
</head>
<body>
    <?php
    $Mois=array(
        'Janvier'=>31,
        'Février'=>28,
        'Mars'=>31,
        'Avril'=>30,
        'Mai'=>31,
        'Juin'=>30,
        'Juillet'=>31,
        'Aoû'=>30,
        'Sept'=>30,
        'Octobre'=>31,
        'novembre'=>30,
        'dicembre'=>31
    );
    echo '<table>';
    
    echo '<tr>';
        echo '<td>Mois</td>';
        echo '<td>Jours</td>';
    echo '</tr>';

        foreach ($Mois as $key =>$value){
            echo "<tr>";
            echo '<td>'.$key.'</td>';
            echo '<td>'.$value.'</td>';
            echo "</tr>";
        }
        
    echo '</table>';
    echo'<br/>';
    $mois1 = key($Mois);
    echo "Premier mois : ". $mois1 ; // Affiche le premier élément de l'associatif (clé)
    next($Mois);
    $mois2 = key($Mois);
    echo'<br/>';
    echo "Deuxième mois : ".$mois2;
    ?>
</body>
</html>