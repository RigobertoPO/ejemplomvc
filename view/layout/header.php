<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous"></script>
    <title>Control de gastos</title>
</head>
<body>
  <header>
    <nav class="nav">

          <?php      
            session_start();        
              if(isset($_SESSION["idUsuario"])){
                if($_SESSION["idUsuario"]==0){
                  echo '<a class="nav-link active" aria-current="page" href="index.php?i=index">Inicio</a>
                     <a class="nav-link" href="index.php?i=acerca">Acerca de</a> ';
                   echo '<a href="index.php?i=login">Iniciar sesión</a>';
                            }
                else{
                  
                    if($_SESSION["tipoUsuario"]==1){
                      echo '<a class="nav-link active" aria-current="page" href="index.php?i=index">Inicio</a>
                        <a class="nav-link" href="index.php?g=gastos">Gastos</a>
                        <a class="nav-link" href="index.php?u=usuarios">Usuarios</a>
                        <a class="nav-link" href="index.php?i=acerca">Acerca de</a> ';
                    }else{
                    echo '<a class="nav-link active" aria-current="page" href="index.php?i=index">Inicio</a>
                          <a class="nav-link" href="index.php?i=acerca">Acerca de</a> ';
                    }
                    echo '<p>'. $_SESSION["nombreUsuario"].'</p>';
                    echo '<a class="nav-link" href="index.php?i=cerrarSesion">Cerrar Sesión</a>'; 
                    }
                  }
                else{
                  echo '<a class="nav-link active" aria-current="page" href="index.php?i=index">Inicio</a>
                     <a class="nav-link" href="index.php?i=acerca">Acerca de</a> ';
                  echo '<a class="nav-link" href="index.php?i=login">Iniciar sesión</a>';        
                }
              ?>   
    </nav>
  </header>  
