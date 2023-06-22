<h1 class="nombre-pagina">Olvide mi Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu Password escribiendo tu E-Mail a continuación</p>

<?php

include_once __DIR__ . "/../templates/alertas.php";

?>

<form action="/olvide" class="formulario" method="POST">
    <div class="campo">
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" placeholder="Tu E-Mail">
    </div>
    <input type="submit" class="boton" value="Enviar">
</form>
<div class="acciones">
    <a href="/crear-cuenta">¿Aun no tienes una cuenta?, Crear una </a>
    <a href="/">Inicia Sesión</a>
</div>