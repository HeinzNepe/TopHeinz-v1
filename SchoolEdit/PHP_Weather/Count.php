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
$sql = "SELECT K.StationID, K.Temperature, K.Pressure, K.Humidity, K.TimeKey
FROM u580154432_tokyo.WeatherStation K
ORDER BY K.StationID DESC, K.Temperature, K.Pressure, K.Humidity, K.TimeKey
LIMIT 250";
$resultat = $kobling->query($sql);


?>

</body>
</html>