<?php 
    foreach ($dato as $key => $value)
        foreach ($value as $va ):
            $id=$va['Id'];
            $descripcion=$va['Descripcion'];
            $monto=$va['Monto'];
            $fecha=$va['FechaRegistro'];
    endforeach;
?>  
<?php require("view/layout/header.php");?>
<h1>editar gasto </h1>
<form action="" >
            <label for="">Id</label> <br>
        <input type="text" name="id" readonly value="<?= $id ?>"><br><br>
    <label for="descripcion">Descripcion:</label>
    <input type="text" name="descripcion" value="<?= $descripcion ?>"><br><br>
    <label for="monto">Monto:</label>
    <input type="text" name="monto" value="<?= $monto ?>"><br><br>
    <label for="categoria">Categoria:</label>
    <select name="idcategoria" >
        <option value="1">Ropa</option>
        <option value="2">Transporte</option>
        <option value="3">Alimentos</option>
    </select><br><br>
    <label for="fecha">Fecha:</label>
    <input type="date"  name="fecha" value="<?= $fecha ?>"><br><br>
    <input type="submit" value="Registrar">
    <input type="hidden" name="g" value="guardar">
</form>
<?php require("view/layout/footer.php");?>