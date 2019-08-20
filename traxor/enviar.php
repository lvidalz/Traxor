<?php 
    $destino="luisvidalzumelzu@gmail.com";
    $nombre= $_POST["Nombre"];
    $correo= $_POST["Correo"];
    $telefono= $_POST["Telefono"];
    $mensaje= $_POST["Mensaje"];
    $contenido= "Nombre:" .$nombre. "\nCorreo" .$correo. "\nTelefono" .$telefono. "\nMensaje" .$mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:index.html");

?>

