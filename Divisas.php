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
<<<<<<< HEAD
<body style="background-image: url('img/bandera-de-colombia.jpg'); background-size: cover;">
=======
<body style="background-image: url('img/fondo2.jpg'); background-size: cover;">
>>>>>>> aa15309d0d51f5ad7300cf36dae0d1d50d2adfdb
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background: url('img/colombia-flag.jpg')">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" href="index.html">Inicio</a>
=======
                <a class="nav-link" href="#">Inicio</a>
>>>>>>> aa15309d0d51f5ad7300cf36dae0d1d50d2adfdb
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                <a class="dropdown-item" href="Registrar.php">Registrar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Consultar.php">Consultar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Actualizar.php">Actualizar Producto</a>
=======
                <a class="dropdown-item" href="#">Registrar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Consultar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Actualizar Producto</a>
>>>>>>> aa15309d0d51f5ad7300cf36dae0d1d50d2adfdb
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
<<<<<<< HEAD
                <a class="nav-link" href="Admin.php">Administración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Reportes.php">Reportes</a>
=======
                <a class="nav-link" href="#">Administración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reportes</a>
>>>>>>> aa15309d0d51f5ad7300cf36dae0d1d50d2adfdb
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Operaciones Matematicas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                <a class="dropdown-item" href="Divisas.php">Conversión de divisas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="comparar.php">Comparar Números</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="secuencia.php">Secuencia de numeros</a>
=======
                <a class="dropdown-item" href="#">Conversión de divisas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Comparar Números</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Secuencia de numeros</a>
>>>>>>> aa15309d0d51f5ad7300cf36dae0d1d50d2adfdb
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
                 <form method="post">
                   Valor a convertir:<br>
                   <input type="text" name="valor1" value="<?php if(isset($_POST['submit'])) { echo $_POST['valor1']; } ?>" required><br>
                   Resultado:<br>
                   <input type="text" name="Resultado" disabled="true" value="<?php
                     if (isset($_POST['submit'])) {
                     if(isset($_POST['gender'])) {
                     //  Displaying Selected Value
                     switch ($_POST['gender']) {
                       case 'conv1':
                         $resultado=$_POST['valor1']*0.00033;
                         echo $resultado." Dolares (USD)";
                         break;
                       case 'conv2':
                         $resultado=$_POST['valor1']*2990.95;
                         echo $resultado." Pesos (COP)";
                         break;
                       case 'conv3':
                         $resultado=$_POST['valor1']*3520.12;
                         echo $resultado." Pesos (COP)";
                         break;
                       case 'conv4':
                         $resultado=$_POST['valor1']*0.00028;
                         echo $resultado." Euros (EUR)";
                         break;
                       case 'conv5':
                         $resultado=$_POST['valor1']*1.18;
                         echo $resultado." Dolares (USD)";
                         break;
                       case 'conv6':
                         $resultado=$_POST['valor1']*0.85;
                         echo $resultado." Euros (EUR)";
                         break;

                       default:
                         // code...
                         break;
                     }
                     }
                   }
                     ?>"><br>
                   Seleccione la operacion a realizar<br>
                   <input type="radio" name="gender" value="conv1" required> Covertir Pesos (COP) a Dolares (USD)<br>
                   <input type="radio" name="gender" value="conv2"> Convertir Dolares (USD) a Pesos (COP)<br>
                   <input type="radio" name="gender" value="conv3"> Euros (EUR) a Pesos (COP)<br>
                   <input type="radio" name="gender" value="conv4"> Pesos (COP) a Euros (EUR)<br>
                   <input type="radio" name="gender" value="conv5"> Euros (EUR) a Dolares (USD)<br>
                   <input type="radio" name="gender" value="conv6"> Dolares (USD) a Euros (EUR)<br>
                   <input type="submit" name="submit" value="Realizar Conversión">

                 </form>
      </div>
     </div>
   </div>


  </body>
</html>
