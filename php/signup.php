<?php

//Nos conectamos a la base de datos
require('database.php');
$mysqli = connectDB();

function get_new_id()
{
  $mysqli = connectDB();
  $sql = "SELECT id FROM user WHERE id>0 ORDER BY id";
  $new_id = 1;
  $query = $mysqli->query($sql);
  if (!$query) {  //si falla la consulta es que no hay usuarios aparte del admin
    echo "Fallo al ejecutar la consulta por id: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    if($query->num_rows >= 1) { //si hay al menos un resultado, no devolverá el usuario con id mas alto

      //cogemos la primera fila con fetch_row
      $user_db = $query->fetch_row();      
      $new_id = $user_db[0] + 1; //nuevo id para el nuevo usuario
    }
  }

  return $new_id;
}

$email = $_POST['email'];
$password = $_POST['password'];
$id = get_new_id();

$sql= "INSERT INTO user VALUES ('$id','$email','$password')";
$query = $mysqli->query($sql);
if (!$query) {
  echo "Error login, revise los campos: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  echo "<p><a href='login.php'>VOLVER ATRÁS</a></p>";
  //echo "<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>";
}
else {
  
  $_SESSION['loggedin'] = true;         //si te has logeado
  $_SESSION['email'] = $email;    //nombre de usuario
  $_SESSION['start'] = time();          //hora a la que empezó la sesión
  $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ; //tiempo de caducidad sesion
  $_SESSION['admin'] = $usuario_bd[0]; //tipo de usuario, normal/admin, el identificador
  header("Location: ../index.php");
  die();
}


























?>
