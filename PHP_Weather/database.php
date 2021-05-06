<?php
 //Linker til underfilene
 //Bestemmer også input typen i de forskjellige boksene
 include 'INSERT_Weather.php';

 ?>

</p>
<form method="POST">
 <input type="number" name="StationID">
 StationID
 </p>
 <input type="number" name="Temperature">
 Temperature
 </p> 
 <input type="number" name="Pressure">
 Pressure
 </p>
 <input type="number" name="Humidity">
 Humidity
 </p>
 <input type="submit" name="leggtil" value="Legg til">
</form>