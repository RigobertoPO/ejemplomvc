<?php require("layout/header.php");?>
<h1>Bienvenidos</h1>
<div class="row row-cols-3">
    <?php
        foreach ($data as $key => $value) {         
            foreach ($value as $gasto) {               
                echo '<div class="col">';
                echo '<div class="card" style="width: 18rem;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">'.$gasto['Id']."</h5>";
                echo '<h6 class="card-subtitle mb-2 text-muted">'.$gasto['Descripcion']."</6>";
                echo '<p class="card-text">'.$gasto['Monto'].'</p>';
                echo '<a href="#" class="card-link">Reservar</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }           
        }
    ?>
</div>
<?php require("layout/footer.php");?>