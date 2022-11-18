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
    <title>Melipbike/Nosotros</title>

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
                <li class="nav-item active">
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

    <div class="row nosotros-informacion">
            
        <div class="col-12 fondo1-nosotros">
            <h2 class="text-center mt-4">Nosotros</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda modi inventore quod, asperiores earum ratione ipsa impedit voluptatem nemo dolore illo necessitatibus? Officiis hic similique soluta dolores ullam, labore velit iusto provident fuga eius laboriosam et consequatur consequuntur voluptatibus ea vero impedit quae placeat distinctio iure blanditiis reprehenderit voluptatum aperiam. Atque iure numquam ipsum tempore illo nesciunt facere excepturi officiis, ut mollitia fugiat sunt nostrum officia, deserunt labore aliquam, voluptas dignissimos est!</p>
        </div>

        <div class="col-12 fondo2-nosotros">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda modi inventore quod, asperiores earum ratione ipsa impedit voluptatem nemo dolore illo necessitatibus? Officiis hic similique soluta dolores ullam, labore velit iusto provident fuga eius laboriosam et consequatur consequuntur voluptatibus ea vero impedit quae placeat distinctio iure blanditiis reprehenderit voluptatum aperiam. Atque iure numquam ipsum tempore illo nesciunt facere excepturi officiis, ut mollitia fugiat sunt nostrum officia, deserunt labore aliquam, voluptas dignissimos est!</p>
        </div>
    </div>

    <div class="row certficaciones justify-content-center">
        <div class="col-12 titulo d-flex justify-content-center align-items-center">
            <h2>Certificaciones</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <h2 class="mt-4">Certificado 1</h2>
                <img class="img-fluid imagen" src="img/certificado1.png" alt="Este es el certficado 1">

            </div>
            <div class="col-sm-12 col-md-4">
                <h2 class="mt-4">Certificado 2</h2>
                <img class="img-fluid imagen" src="img/certificado2.png" alt="Este es el certficado 2">
            </div>
            <div class="col-sm-12 col-md-4">
                <h2 class="mt-4">Certificado 3</h2>
                <img class="img-fluid imagen" src="img/certificado3.png" alt="Este es el certficado 3">
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content ">
                    <img src="" class="recibir-imagen img-fluid">
                    <div class="modal-footer">
                        <p class="descripcion-imagen"></p>
                    </div>
                </div>
            </div>
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