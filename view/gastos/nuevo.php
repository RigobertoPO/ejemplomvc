<?php require("view/layout/header.php");?>
<h1>Agregar gasto </h1>
<form action="" >
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion"><br><br>
    <label for="monto">Monto:</label>
    <input type="text" name="monto"><br><br>
    <label for="categoria">Categoria:</label>
    <select name="idcategoria" >
        <option value="1">Ropa</option>
        <option value="2">Transporte</option>
        <option value="3">Alimentos</option>
    </select><br><br>
    <label for="fecha">Fecha:</label>
    <input type="date"  name="fecha"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="g" value="guardar">
</form>
<?php require("view/layout/footer.php");?>