<?php
include 'head2.html'; //Haciendo referencia al head de esta pagina
//Recibiendo la información del script Index.php usando el metodo GET
$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$correo = $_GET['correo'];
$contrasena = $_GET['contrasena'];

//Mostrando la información recibida en la pantalla
echo "<p>Mi Nombre es: $nombre</p>";
echo "<p>Mi Edad es: $edad</p>";
echo "<p>Mi Correo es: $correo</p>";
echo "<p>Mi Contraseña es: $contrasena</p>";
echo "<a href = 'Index.php'> Back </a>"; //Boton para regresar a Index.php
?>