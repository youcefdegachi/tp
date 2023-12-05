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
    </style>
</head>
<body>
    <?php
        $notes = array(10, 15, 8, 15, 14, 9, 13, 18);
        echo '<table border = 1>';
        echo '<tr>';
        echo '<th>Element</th>';
        echo '<th>Valeur</th>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>premier</th>';
        echo '<th>'.$notes[0].'</th>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>troisième</th>';
        echo '<th>'.$notes[2].'</th>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>cinquième</th>';
        echo '<th>'.$notes[4].'</th>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>derniere</th>';
        echo '<th>'.$notes[count($notes)-1].'</th>';
        echo '</tr>';
        echo '</table>';

        ($notes[4] >10)? print("<p>Superieur a 10</p>") : print("<p>non</p>");
    ?>
</body>
</html>