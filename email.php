<?php 
$mensaje= "Latitud: ".$_POST["lat"].", Logintud: ". $_POST["lon"]. ", Nombre: ".$_POST["nombre"];
mail('javierojeda@asore.net', 'Correo de coordenadas', $mensaje);
mail('ojeda.javier94@gmail.com', 'Correo de coordenadas', $mensaje);
?>
