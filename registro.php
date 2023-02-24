<?php

include('conexion.php');

if (isset($_POST['btn_continuar'])) {
  $Nombre = $_POST['Nombre'];
  $Telefono = $_POST['Telefono'];
  $Correo = $_POST['Correo'];
  $Clave =  password_hash($_POST['Clave'],PASSWORD_BCRYPT);
  
  $query = "INSERT INTO administrador(Nombre, Telefono, Correo, Clave) VALUES ('$Nombre', '$Telefono', '$Correo', '$Clave')";
  $result = mysqli_query($conex, $query);
  
  if(!$result) {
    die("FALLIDO");
  }
  echo 'GUARDADO CORRECTAMENTE';
  header("Location: pag_registro.php?login");
  
}
  ?>