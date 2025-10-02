<?php
if (isset($_POST['nombre'])) {
    $nombre = htmlspecialchars($_POST['nombre']);
    echo '¡Hola, '.$nombre.'! Bienvenido al mundo de PHP.';
} else {
?>
<form method="post">
    <label>Ingresa tu nombre: </label>
    <input type="text" name="nombre" />
    <input type="submit" value="Enviar" />
</form>
<?php
}
?>
