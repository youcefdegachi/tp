<?php 
    include("connexion.php");

    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $prenom=$_POST["prenom"];
    echo "<p>Nom: ".$nom."<p>";
    echo "<p>Gmail: ".$email."<p>";
    echo "<p>prenom: ".$prenom."<p>";


    $sql = "INSERT INTO users (nom, prenom, email) VALUES ('$nom', '$prenom','$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Données insérées avec succès";
        } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
        }



        $conn->close();
?>