<?php
$conexion = new mysqli(
  "brh1kscwvl3syqqeira6-mysql.services.clever-cloud.com", 
  "uuuclrpxhzb8ruiaa",              
  "E64c4aRpsFrDCqz27PtbN",                  
  "bsnbrh1kscwvl3syqqeira6",                       
  3306                              
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

