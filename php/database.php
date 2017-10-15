<?php

require('config.php');


function connectDB(){
  global $Host,$User,$Pass,$Database;
  $mysqli = new mysqli($Host,$User,$Pass,$Database);
  if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else
  {
  
  }
  return $mysqli;
}

//$mysqli = conectarBD();
//if (!$mysqli->query("INSERT INTO  `usuarios` (`Nombre`,`Apellidos`,`Pass`,`Direccion`,`Ciudad`,`CP`,`Provincia`,`Email`,`TipoSuscripcion`,`DNI`) VALUES ('Pedro','Lopez','b1234567','C/San Miguel Alta','Granada',18002,'Granada','pedrolopez@correo.ugr.es','B','6149207T')"))
//{
//  echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
//}

//$mysqli->query("select * from usuarios");
