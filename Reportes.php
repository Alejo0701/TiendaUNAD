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
<body style="background-image: url('img/bandera-de-colombia.jpg'); background-size: cover;">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="background: url('img/colombia-flag.jpg')">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Registrar.php">Registrar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Consultar.php">Consultar Producto</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Actualizar.php">Actualizar Producto</a>
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
                <a class="nav-link" href="Admin.php">Administración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Reportes.php">Reportes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Operaciones Matematicas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Divisas.php">Conversión de divisas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="comparar.php">Comparar Números</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="secuencia.php">Secuencia de numeros</a>
              </div>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="contenido">
   <div class="container">
   <div class="row">
      <div class="col-xs-12">
         <div class="bienvenida">
      <p align="center" style="text-shadow: 2px 2px 5px red";><b>LA TIENDITA CRIOLLA: VENTA DE PRODUCTOS TIPICOS COLOMBIANOS</b></p>
      <br>
      <p align="center" style="text-shadow: 2px 2px 5px red";><b>Reportes</b></p>
      <br>
      <p align="center"><img class="img-responsive banner-diseno" src="img/constr.jpeg"></p>
      <br>

   </div>
      </div>
   </div>
</div>
</div>


  </body>
</html>
