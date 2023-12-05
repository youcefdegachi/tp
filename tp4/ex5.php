<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr:hover{
            background:#ccc;
        }
        tr,td{
            border-bottom: 1px solid #222;
            padding: 15px;
        }
        table{
            style="border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
    $etudiants = array('Said' => 13, 'Badr' => 16, 'Najet' => 15);

    function aff($etudiants) {
        echo '<table">';
        echo '<tr>';
        echo "<td>Etudiant</td>";
        echo "<td>Note</td>";
        echo '</tr>';

        foreach ($etudiants as $etud => $Note) {
            echo '<tr>';
            echo "<td>$E</td>";
            echo "<td>$Note</td>";
            echo '</tr>';
        }

        echo '</table>';
    }

    aff($etudiants);
    $etudiants["Karim"] = 17;
    echo "<br/>";
    echo "<hr/>";
    aff($etudiants);
    unset($etudiants["Badr"]);
    echo "<br/>";
    echo "<hr/>";
    aff($etudiants);
    echo "<br/>";
    echo "<hr/>";
    echo "Note maximale est : ".max($etudiants);
    echo "<hr/>";
    echo "Note minimale est : ".min($etudiants);
    echo "<hr/>";
    echo "La somme des notes de la classe est : ".array_sum($etudiants);
    echo "<hr/>";
    echo "Le nombre total des étudiants est : ".count($etudiants);
    echo "<hr/>";
    echo "la moyenne de la classe est : ".array_sum($etudiants)/count($etudiants);
    echo "<hr/>";
    ?>

</body>
</html>