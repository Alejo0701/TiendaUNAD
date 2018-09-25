<!DOCTYPE html>
<html lang="es">
<head>
  <title>LA TIENDITA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="css/alejo.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('img/fondo2.jpg'); background-size: cover;">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background: url('img/colombia-flag.jpg')">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Registrar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Consultar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Actualizar Producto</a>
              </div>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#"><img src="img/banderaCO-3.png" width="70" height="70" alt=""> LA TIENDITA CRIOLLA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Administración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reportes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Operaciones Matematicas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Conversión de divisas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Comparar Números</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Secuencia de numeros</a>
              </div>
            </li>
        </ul>
    </div>
</nav>
<br>
    <div class="contenido">
         <div class="container">
         <div class="row">
            <div class="col-6 offset-3">
               <div class="divisas mx-auto">
                 <form method="Post">

                 Ingrese el valor en Pesos (COP):<br>
                 <input type="text" name="valorcop" value="<?php if(isset($_POST['submit2'])) { echo $_POST['valorcop']; } ?>" required><br>
                 Ingrese el valor en Euros (EUR):<br>
                 <input type="text" name="valoreur" value="<?php if(isset($_POST['submit2'])) { echo $_POST['valoreur']; } ?>" required><br><br>

                 <input type="submit" name="submit2" value="Comparar"><br>


                 Resultado:<br>
                 <p align="center">
                 <?php
                   if (isset($_POST['submit2'])) {
                   $valor1=intval($_POST['valorcop'])*0.0028;
                   $valor2=$_POST['valoreur'];
                   if ($valor1==$valor2) {
                       echo "Los dos valores ingresados son iguales";
                     }
                     elseif ($valor1>$valor2) {
                       echo "El valor en pesos es mayor al convetirlo que el valor en euros ingresado.";
                     }
                     else {
                       echo "El valor ingresado en euros en mayor al valor ingresado en pesos al convertirlo";
                     }
                   }?>
                 </p>
                   </form>
      </div>
     </div>
   </div>


  </body>
</html>
