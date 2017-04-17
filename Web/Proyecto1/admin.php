<?php
require('varSession.php');
require('conex.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/terraria-512.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!--navbar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SoGreeen!</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href= "#" class="dropdown-toggle" data-toggle="dropdown">Cuenta
              </a>
              <ul class="dropdown-menu">
                <li><a href="resultado.php">Entrar como Cliente</a></li>
                <li><a href="salir.php">Cerrar Sesion</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron text-center">
      <h1>So Greeen!</h1>
      <p>Gerente</p>
      <form class="form-inline" action="adminTienda.php" method ="POST">
        <div class="input-group-btn">
          <button type="submit" class="btn btn-danger">Administrar Artículos</button>
        </div>
      </form>
    </div>
    <h1 class="text-center" style="color: #0ECEA3;">Hola <?php echo $_SESSION['user'];?> bienvenido a SoGreeen!</h1>
    <div class="container">
      <h2> Ingresar usuario nuevo </h2>
      <form class="form-inline" action="create.php" method="POST">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" name="user" class="form-control">
        </div>
        <div class="form-group">
          <label for="clave">Constraseña:</label>
          <input type="password" name="pass" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="edad">Edad:</label>
          <input type="text" name="edad" class="form-control">
        </div>
        <div class="form-group">
          <label for="gerente">Gerente: </label><input type="checkbox" name="tipo" value="1">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-success">Aceptar</button>
      </form>
      <h2> Usuarios Actuales</h2>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>Usuario</th>
              <th>Correo</th>
              <th>Edad</th>
            </tr>
          </thead>
          <?php
          $resultado= mysqli_query($con,"SELECT * FROM `usuarios`");
          while ($renglon= mysqli_fetch_array($resultado)) {
          echo "<tbody>";
            echo "<tr>";
              echo "<td>$renglon[0]</td>";
              echo "<td>$renglon[1]</td>";
              echo "<td>$renglon[3]</td>";
              echo "<td>$renglon[7]</td>";
            echo "</tr>";
          echo "</tbody>";
          }
          ?>
        </table>
      </div>
      <h2 >Borrar</h2>
      <form class="form-inline" action="delete.php" method="GET">
        <div class="form-group">
          <label> Borrar a: </label>
          <input type="text" name="id" placeholder="ID del cliente a borrar">
        </div>
        <button type="submit" class="btn btn-danger">Borrar</button>
      </form>
      <div style="float:right;">
        <a type="button" class="btn btn-info" href="salir.php">Cerrar Sesión</a>
      </div>
    </div>
  </body>
</html>