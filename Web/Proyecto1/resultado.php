<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/terraria-512.png">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
          <a class="navbar-brand" href="tienda.html">SoGreeen!</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href= "#" class="dropdown-toggle" data-toggle="dropdown">Redes Sociales
              </a>
              <ul class="dropdown-menu">
                <li><a href="https://www.facebook.com/SoGreeen/">Facebook</a></li>
                <li><a href="http://Justsogreeen.tumblr.com/">Tumblr</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href= "#" class="dropdown-toggle" data-toggle="dropdown">Cuenta
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Datos Personales</a></li>
                <li><a href="salir.php">Cerrar Sesion</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section id="intro">
      <div class="intro-body text-center">
        <div class="row">
          <div class="col-md-12 intro-content">
            <div class="intro-text-center">
              <img src="img/17349628_843510132454516_5853412804416220324_o.jpg" width="100%" class="img-responsive" alt="portada" >
            </div>
            <h2 style="font-size: 35px">So Greeen!</h2>
            <a href="tienda.html" class="btn btn-success" role="button">Tienda</a>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <div class="container">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Usuario</th>
              <th>Password</th>
              <th>Email</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Edad</th>
            </tr>
          </thead>
          <?php
          require('conex.php');
          require('varSession.php');
          $id=$_SESSION['id'];
          $result= mysqli_query($con,"SELECT * FROM `usuarios` WHERE id ='$id'");
          while ($row= mysqli_fetch_array($result)) {
          echo "<tbody>";
            echo "<tr>";
              echo "<td>$row[1]</td>";
              echo "<td>$row[2]</td>";
              echo "<td>$row[3]</td>";
              echo "<td>$row[4]</td>";
              echo "<td>$row[5]</td>";
              echo "<td>$row[6]</td>";
              echo "<td>$row[7]</td>";
            echo "</tr>";
          echo "</tbody>";
          }
          ?>
        </table>
      </div>
      <form action="update.php" method="GET">
        <div style="float:right;">
          <label for="contraseña"> Cambiar Contraseña:</label>
          <input type="password" name="contra" placeholder="Nueva contraseña">
          <button type="submit" class="btn btn-primary btn-sm">Cambiar</button>
        </div>
      </form>
    </div>
  </body>
</html>