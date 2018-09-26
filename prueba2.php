<!DOCTYPE html>
<html lang="en">
<head>
  <title>LA TIENDITA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
       <link href="css/alejo2.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('img/fondo2.jpg'); background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">LA TIENDITA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Administración</a>
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
  <form method="Post">

  Ingrese el valor en Pesos (COP):<br>
  <input type="text" name="valorcop" value="<?php if(isset($_POST['submit2'])) { echo $_POST['valorcop']; } ?>" required><br>
  Ingrese el valor en Euros (EUR):<br>
  <input type="text" name="valoreur" value="<?php if(isset($_POST['submit2'])) { echo $_POST['valoreur']; } ?>" required><br><br>

  <input type="submit" name="submit2" value="Comparar"><br>


  Resultado:<br>
  <input type"text" name="resultado" value="<?php
    if (isset($_POST['submit2'])) {
    $valor1=intval($_POST['valorcop']*0.0028);
    $valor2=intval($_POST['valoreur']);
    if ($valor1==$valor2) {
        echo "Los dos valores ingresados son iguales";
      }
      elseif ($valor1>$valor2) {
        echo "El valor en pesos es mayor al convetirlo que el valor en euros ingresado.";
      }
      else {
        echo "El valor ingresado en eurosa en mayor al valor ingresado en pesos al convertirlo";
      }
    }?>">
    </form>


    <form method="POST">
      <input type="submit" name="submit3" value="Generar"><br>
      <input type"text" name="resultado2" value="<?php
        if (isset($_POST['submit3'])) {
    for ($i=0; $i<=26 ; $i++) {
      $n1=$i;
      echo $n1." - ";
    }
  }    ?>">
</form>

</body>
</html>
