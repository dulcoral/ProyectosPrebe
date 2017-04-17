<?php
require('conex.php');
$resultado= mysqli_query($con,"SELECT * FROM `tienda`");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Tienda</title>
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
          <a class="navbar-brand" href="#">SoGreeen!</a>
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
                <li><a href="resultado.php">Datos Personales</a></li>
                <li><a href="salir.php">Cerrar Sesión</a></li>
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
              <!--Carrousel-->
              <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicadores -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>
                <!-- imagenes -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/13116260_681944965277701_7889251028202147051_o.jpg" alt="terrarios fondo blanco">
                  </div>
                  <a class="item" href="kit.html">
                  <img src="img/17917986_858428497629346_5116506916344142693_o.jpg" alt="kits"></a>
                </div>
                <!-- siguiente y anterior -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
            </div>
          </div>
          <h2 style="font-size: 40px">TIENDA</h2>
        </div>
      </div>
    </section>
    <div class="container">
      <h1>Artículos</h1>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Descripción</th>
              <th>Cantidad</th>
            </tr>
          </thead>
          <?php
          while ($renglon= mysqli_fetch_array($resultado)) {
          echo "<tbody>";
            echo "<tr>";
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
    </div>
  </body>
</html>