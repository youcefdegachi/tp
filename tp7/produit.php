
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


<?php 


    // include("connextion.php");$nomServeur = "localhost";
    include('connexion.php');
    $sql = "SELECT id,nom, description, prix,quantite FROM produit";
    $result = $conn->query($sql);

    echo "
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>description</th>
            <th>Prix</th>
            <th>quantite</th>
        </tr>
    ";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>".$row['id']."</td>
                <td>".$row['nom']."</td>
                <td>".$row['description']."</td>
                <td>".$row['prix']."</td>
                <td>".$row['quantite']."</td>
            <tr>
            "  ;
        }
        } else {
        echo "select not work";
    }

    echo'</table>';

    $conn->close();

?>



</body>
</html>
