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
        $etudiants = array('Mohamed', 'Hanen', 'Safa', 'Ali', 'Ahmed', 'Saber', 'Yosra', 'Sami');
        echo'<ul>';

            foreach( $etudiants as $etud ) {
                echo "<li>$etud</li>";
            }

        echo '</ul>';
    ?>
</body>
</html>