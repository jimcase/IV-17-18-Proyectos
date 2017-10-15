<?php
  /* start the session */
  //cargamos los datos de la sesion
  session_start();
  //borramos los datos
  session_unset ();
  //nos vamos a esta pagina principal
  header("Location: ../index.php");
?>
