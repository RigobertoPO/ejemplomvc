<?php require("view/layout/header.php");?>
<h1>Iniciar sesión </h1>
<form action="" >
    <label for="correo">Correo:</label>
    <input type="text" name="correo"><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Enviar">
    <input type="hidden" name="i" value="autenticar">
</form>
<a href="index.php?i=registrar">Registrarme</a>
<?php require("view/layout/footer.php");?>