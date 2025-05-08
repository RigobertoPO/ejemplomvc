<?php require("view/layout/header.php");?>
<h1>gastos </h1>
<a href="index.php?g=nuevo">NUEVO</a>
    <div class="container">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Monto</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                foreach ($data as $key => $value)
                    foreach ($value as $va ):
                        echo "<tr><td>".$va['Id']."</td><td>".$va['Descripcion']."</td><td>".$va['Monto']."</td>";
                        echo "<td><a href='index.php?g=editar&id=".$va['Id']."'>ACTUALIZAR</a> 
                        <a href='index.php?g=eliminar&id=".$va['Id']."'>ELIMINAR</a></td>";
                        echo "</tr>";
                    endforeach;
                ?>      
        </tbody>
        </table>
    </div>
<?php require("view/layout/footer.php");?>