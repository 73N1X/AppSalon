<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Inserta tu nueva contraseña a continuación</p>

<?php

include_once __DIR__ . "/../templates/alertas.php";

?>
<?php if($error) return; ?>
<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu nueva Contraseña">
    </div>
    <input type="submit" class="boton" value="Guardar">
</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una </a>
    <a href="/">Inicia Sesión</a>
</div>