<!DOCTYPE html>


<html lang="en" lang="no">
<head>
    <!--Setter bredden på siden til 1, gjør at grids kan bli oppgitt i prosent-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--Gir ÆØÅ-->
    <meta charset="utf-8" />
    <!--Linker extern css sheet-->
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">

    <!--Website tab icon-->
    <link rel="icon" href="../mainbilder/minilogo.png">
    <title>Henrik Hub</title>
</head>
<body>
<div class="hovedvindu">

<h2>Thing</h2>

<?php
 // Tilkoblingsinformasjon
 $tjener = "109.106.246.51:3306";
 $brukernavn = "u580154432_tokyo";
 $passord = "Tokyo2021";
 $database = "u580154432_tokyo";
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 // if ($kobling->connect_error) {
 // die("Noe gikk galt: " . $kobling->connect_error);
// }
// else {
 // echo "Koblingen virker"; }

 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT * FROM table";
$resultat = $kobling->query($cnt);

$cnt = mysql_num_rows(mysql_query("SELECT COUNT(1) FROM WeatherStation"));
echo "<td> $cnt </td>";

//Koden virker fortsatt ikke. Errorcode 500 (intern feil)


?>