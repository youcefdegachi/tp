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
        $etudiants = array('Alice', 'Bob', 'Charlie', 'David', 'Eve');
        $nombreEtudiants = count($etudiants);
        echo "<h3>Le nombre d'étudiants est : $nombreEtudiants.</h3>"
    ?>
</body>
</html>