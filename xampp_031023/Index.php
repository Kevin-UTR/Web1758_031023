<?php include 'head.html'; ?><!--En esta linea hacemos referencia a nuestro head  -->
<form action="resultado.php" method="get"><!--En esta linea indicamos que todo lo que este dentro de la etiqueta <form> será enviado a resultado.php usando el metodo get-->
    <label for="nombre">Nombre:</label><!--Etiqueta de campo para indicar que es lo que se debe ingresar -->
    <input type="text" id="nombre" name="nombre" required><br> <!--La etiqueta <input> va a contener lo indicado en la etiqueta label-->

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br><!--Cada input tiene una configuración diferente dependiendo de que dato se va a ingresar-->

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br>

    <input type="submit" value="Enviar"><!--Boton para enviar la información-->
</form>