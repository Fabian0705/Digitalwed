<?php

if (!empty($_POST["Login"])) {
  if (empy($_POST["usuario"])and empty($_POST["password"])) {
    echo "Los campos estan vacios";
  } else {
    $usuario=$_POST["usuario"];
    $clave=$_POST["password"];
    $sql=$conexion->query("select * form login where  usuario='$usuario' and clave='$clave'" );
 if ($datos=$sql->fetch_objet()) {
    header("location:index.html");
 } else {
    echo "Acceso denegado";
 }
}
}

?>