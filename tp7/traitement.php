<?php

$nom=$_POST["nomProudit"];
$description=$_POST["description"];
$Prix=$_POST["Prix"];
$quantite=$_POST["quantite"];
if($nom==''){
    echo"nom est vide <br>";
}
if($description==''){
    echo"description est vide <br>";
}
if($Prix==''){
    echo"prix est vide <br>";
}
if($quantite==''){
    echo"quantite est vide <br>";
}

include('connexion.php');

if($nom=='' || $description=='' || $Prix=='' || $quantite==''){
    die ('errure');
}else{
    echo 'ajoute succes';
    $sql = "INSERT INTO produit (nom, description, prix,quantite) VALUES ('$nom', '$description','$Prix','$quantite')";
    $conn->query($sql) ;
}

$conn->close();

?>