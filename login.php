<?php

include('conexion.php');

if (isset($_POST['btn_login'])) {
  
  if (!empty($_POST['Correo2']) && !empty($_POST['Clave2'])) {
    $Correo = $_POST['Correo2'];
    $query = "SELECT id, Correo, Clave FROM administrador WHERE Correo='$Correo'";
    $result = mysqli_query($conex, $query);

    if (count($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($_POST['Clave2'], $row['Clave'])) {
        echo 'hola2';
        $_SESSION['user_id'] = $row['id'];
        header("Location: pag_inicio.php");
      } else {
        echo 'Sus datos no coinciden';
      }
    } 
  
  }
}