<?php
  /* start the session */
  require('database.php');
  require('modules.php');
  echo "Modulos cargados";
  session_start();
  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
   <title>Check Login</title>
   <meta charset = "utf8" />
  </head>


  <body>

  <?php  

  $mysqli = connectDB();

  // data enviada desde el formulario
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql= "SELECT * FROM user WHERE email='$email' and pass='$password'";
  $query = $mysqli->query($sql);
  if (!$query) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  else {
    if($query->num_rows >= 1) {

      //cogemos la primera fila con fetch_row
      $usuario_bd = $query->fetch_row();
      $_SESSION['loggedin'] = true;         //si te has logeado
      $nom_sesion = session_name($email);
      $_SESSION['email'] = $email;    //nombre de usuario
      $_SESSION['start'] = time();          //hora a la que empezó la sesión
      $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ; //tiempo de caducidad sesion
      $_SESSION['admin'] = $usuario_bd[0]; //tipo de usuario, normal/admin, el identificador



     
      #http://www.ajimix.net/blog/actualizar-diferentes-filas-en-una-sola-consulta-sql/
      if($_SESSION['loggedin'] && $_SESSION['admin'] == 0)
      {
        header("Location: ../index.php");
        die();
      }
      else
      {
        header("Location: ../index.php");
        die();
      }
    }
  }


  ?>
  HOLA
  </body>
</html>
