<?php 

    include("connexion.php");
    $sql = "SELECT nom, prenom, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo "Nom : " . $row["nom"] . " - Prénom : " .
        $row["prenom"] . " - Email : " . $row["email"] . "<br>";
        }
        } else {
        echo "Aucun résultat trouvé";
    }

    $conn->close();
?>