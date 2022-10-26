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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Melipbike/Proyectos</title>

</head>

<body>
    <a href="https://wa.me/+56953087843" class="float" target="_blank"><i class="fab fa-whatsapp my-float"></i></a>
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
                <li class="nav-item">
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
                <li class="nav-item active">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row fondo-contacto justify-content-around">
        <div class="d-none d-md-block col-md-5 informacion-contacto">
            <h2>MELIPBIKE</h2>
            <p><i class="fas fa-map-marker-alt fa-2x"></i></p>
            <p>Presidente Ibáñez N° 46, Puerto Montt</p>
            <i class="fab fa-whatsapp fa-2x"></i>
            <p>+56953087843</p>
            <i class="fas fa-envelope fa-2x"></i>
            <p>Melipbike@gmail.com</p>
        </div>
        <div class="col-9 col-md-6 formulario">
            <h2 class="mb-3">ESCRIBENOS AHORA</h2>

            <form action="PHPMailer/correo.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="correo" placeholder="Correo" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="mensaje" rows="3" placeholder="Mensaje" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>

    <div class="row">
        <div class=" col-12 mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d747.4792268648748!2d-72.93521427361537!3d-41.46271748858374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96183af81b2b2599%3A0x161d0c0cd05e5db6!2sCalle%20de%20Servicio%2046%2C%20Puerto%20Montt%2C%20Los%20Lagos!5e0!3m2!1ses-419!2scl!4v1619052043995!5m2!1ses-419!2scl" width="1330" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>



    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fontawesome.min.js"></script>

    <?php
    //include ('chatbot.php');
    ?>
</body>

</html>