<?php require("view/layout/header.php");?>
<h1>Registrar usuario </h1>
<form action="" >
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"><br><br>
    <label for="correo">Correo:</label>
    <input type="text" name="correo"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Enviar">
    <input type="hidden" name="i" value="guardar">
</form>
<?php require("view/layout/footer.php");?>