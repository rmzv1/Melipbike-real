<?php
include "administrador/db.php";
$images = get_imgs();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Melipbike/Inicio</title>

</head>

<body>
  <header>
    <?php
    include('header.php');
    ?>
  </header>

  <nav class="navbar navbar-expand-md navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mt-1">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nosotros.php">NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicios.php">SERVICIOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="trabajos.php">TRABAJOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">CONTACTO</a>
        </li>
      </ul>
    </div>
  </nav>


  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <?php $cnt = 0;
      foreach ($images as $img) : ?>
        <div class="carousel-item <?php if ($cnt == 0) {
                                    echo 'active';
                                  } ?>">
          <img class="img-fluid" src="<?php echo 'administrador/' . $img->folder . $img->src; ?>" alt="Imagen 1">
        </div>
      <?php $cnt++;
      endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row">
    <div class="col">
      <iframe src="https://es.euronews.com/embed/timeline" scrolling="no" style="border:none; min-height:425px; width:100%; height:100%;"></iframe>
    </div>
  </div>

  <div class="row  align-items-center">
    <div class="col titulo d-flex justify-content-center align-items-center">
      <h3>Videos de la Semana</h3>
    </div>
  </div>
  <div class="row seccion-videos">
    <div class="col-sm-12 col-md-4">
      <iframe width="420" height="315" src="https://www.youtube.com/embed/8Zv5zCqGGrM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-sm-12 col-md-4">
      <iframe width="420" height="315" src="https://www.youtube.com/embed/tSwUnzdupbo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-sm-12 col-md-4">
      <iframe width="420" height="315" src="https://www.youtube.com/embed/9jD9RQrUYw8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div class="row informacion">
    <div class="col-12 col-md-8 columna-imagenes fondo1">
      <p class="mt-5">Te esperamos de lunes a sábado</p>
      <p class="mt-3 horario">Nuestro horario de atencion:</p>
      <p class="horario">Mañana : 10:30 - 14:00</p>
      <p class="horario">Tarde : 16:00 - 18:00</p>
    </div>

    <div class="d-none d-md-block col-4 columna-imagenes fondo2">
      <p class="mt-5">Todo en :</p>
      <ul>
        <li>Mantenciones</li>
        <li>Sistemas Hidraulicos</li>
        <li>Shimano Steps</li>
        <li>Accesorios</li>
        <li>Repuestos</li>
      </ul>
    </div>
  </div>

  <footer>
    <?php
    include('footer.php');
    ?>
  </footer>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/fontawesome.min.js"></script>

  <?php
  //include ('chatbot.php');
  ?>

</body>

</html>