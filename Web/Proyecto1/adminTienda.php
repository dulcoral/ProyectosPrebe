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
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php">SoGreeen!</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href= "#" class="dropdown-toggle" data-toggle="dropdown">Cuenta
              </a>
              <ul class="dropdown-menu">
                <li><a href="tienda.html">Entrar como cliente</a></li>
                <li><a href="salir.php">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron text-center">
      <h1>So Greeen!</h1>
      <p>Gerente</p>
      <form class="form-inline" action="admin.php" method ="POST">
        <div class="input-group-btn">
          <button type="submit" class="btn btn-primary">Administrar Usuarios</button>
        </div>
      </form>
    </div>
    <h1 class="text-center" style="color: #0ECEA3;">Hola <?php echo $_SESSION['user'];?> bienvenido a SoGreeen!</h1>
    <div class="container">
      <h1>Artículos</h1>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descripción</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <?php
          $resultado= mysqli_query($con,"SELECT * FROM `tienda`");
          while ($renglon= mysqli_fetch_array($resultado)) {
            echo "<tbody>";
                echo "<tr>";
                  echo "<td>$renglon[0]</td>";
                  echo "<td>$renglon[1]</td>";
                  echo "<td>$renglon[2]</td>";
                  echo "<td>$renglon[3]</td>";
              echo "<td>$renglon[4]</td>";
              echo "</tr>";
          echo "</tbody>";
          }
          ?>
        </table>
      </div>
      <h2 >Borrar Articulo</h2>
      <form class="form-inline" action="deleteArti.php" method="GET">
        <div class="form-group">
          <label> Borrar a: </label>
          <input type="text" name="id" placeholder="ID del artículo a borrar">
        </div>
        <button type="submit" class="btn btn-danger">Borrar</button>
      </form>
      <h2>Añadir Artículo</h2>
      <form class="form-inline" action="addArti.php" method="GET">
        <div class="form-group">
          <label> Nombre: </label>
          <input type="text" name="nombre" placeholder="artículo">
        </div>
        <div class="form-group">
          <label> Precio: </label>
          <input type="text" name="precio" placeholder="Precio">
        </div>
        <div class="form-group">
          <label> Descripcion: </label>
          <input type="text" name="descrip" placeholder="Descripcion del artículo">
        </div>
        <div class="form-group">
          <label> Cantidad: </label>
          <input type="text" name="cantidad" placeholder="Artículos disponibles">
        </div>
        <button type="submit" class="btn btn-success">Añadir</button>
      </form>
      <h2>Modificar</h2>
      <form class="form-inline" action="modificar.php" method="POST">
        <div class="form-group">
          <label> ID: </label>
          <input type="text" name="id" placeholder=" ID del artículo">
        </div>
        <div class="form-group">
          <label> Cantidad: </label>
          <input type="text" name="canti" placeholder="Cantidad">
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
      </form>
    <div style="float:right;">
      <a type="button" class="btn btn-info" href="salir.php">Cerrar Sesión</a>
    </div> 
    </div>
  </body>
</html>