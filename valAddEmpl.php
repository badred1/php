<?php

require 'connection.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nom = checkInput($_POST["Nom"]);
    $prenom = checkInput($_POST['Prenom']);
    $sexe = checkInput($_POST['Sexe']);
    $adresse = checkInput($_POST['Adresse']);
    $date = checkInput($_POST['Date']);
    $typeService = checkInput($_POST['Type']);
     
    echo($nom);echo($prenom);echo($sexe);
    echo($date);echo($adresse);echo($typeService);

    addEmployee($nom, $prenom, $sexe, $adresse,$date,$typeService);


    header('Location:/success.php');
} 
        
function checkInput($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


