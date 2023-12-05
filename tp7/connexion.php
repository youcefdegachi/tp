<?php 

$nomServeur = "localhost";
$nomUtilsateur = "root";
$psw = "";
$dataBase = "gestion";
$conn = new mysqli($nomServeur,$nomUtilsateur,$psw,$dataBase);
if ($conn->connect_error) {
        die("La connexion a échoué :" . $conn->connect_error);
}else {
        echo "Connexion errour <br><br>";
}

?>