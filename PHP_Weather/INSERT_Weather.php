<?php
if(isset($_POST["leggtil"]))
{

 //Dette dokumentet legger inn i Artikkel tabbelen (ArtikkelID, Kilde og Beskrivelse)

 // Tilkoblingsinformasjon
 $tjener = "109.106.246.51:3306";
 $brukernavn = "u580154432_tokyo";
 $passord = "Tokyo2021";
 $database = "u580154432_tokyo";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn

 $SID = $_POST["StationID"];
 $Temp = $_POST["Temperature"];
 $Pressure = $_POST["Pressure"];
 $Humidity = $_POST["Humidity"];
 
 $sql = "INSERT INTO WeatherStation (StationID, Temperature, Pressure, Humidity) VALUES ('$SID', '$Temp', '$Pressure', '$Humidity')";

 //Viser om spørringen ble gjennomført
 if($kobling->query($sql)) {
 echo "ArtikkelID spørring ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error).";
}


}
?>