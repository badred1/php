<?php
include 'connection.php';

$allEmpls=allEmployes();
//echo("<table class=". "'ui inverted red table'>");
foreach($allEmpls as $employee){
    $nom=$employee['nom'];
    $prenom=$employee['prenom'];
    $sex=$employee['sexe'];
    $adresse=$employee['adresse'];
    $dateNaissance=$employee['dateNaissance'];
    $service=$employee['numServ'];
    $code=$employee['code'];

    echo("<tr>");
    echo("<td>");
    echo($nom);
    echo("</td>");

    echo("<td>");
    echo($prenom);
    echo("</td>");

    echo("<td>");
    echo($sex);
    echo("</td>");

    echo("<td>");
    echo($adresse);
    echo("</td>");

    echo("<td>");
    echo($dateNaissance);
    echo("</td>");

    echo("<td>");
    echo($service);
    echo("</td>");
    echo("<td>");
     /* echo("<a class='ui animated fade red button' tabindex='0' href='./delEmpl.php?ID=>".$ID);
     */
   /*  echo(" <a href='formAddEmpl.php' class='ui small right floated labeled icon red button'> <i class='close icon'></i> Supprimer employé
    </a>"); */
    echo("<div class='ui buttons'>
    <a class='ui  negative button '  href='./delEmpl.php?code=".$code."'>Supprimer</a>
    <div class='ou'></div>
    <a class='ui button' href='./editEmpl.php?ID=".$code."'>Modifier</a>
  </div>");
    echo("</td></tr>");
}
//echo("</table>");
?>

