<?php
include "db.php";
include "login/php/conexion.php";

$images = galeria_imgs();
session_start();
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == null) {
    print "<script>alert(\"Acceso invalido!\");window.location='login/login.php';</script>";}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <div class="logo">
                    <h2><img src="img/logo.png" alt=""></h2>
                </div>
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="slider-inicio.php"><i class="icon-picture"></i><span>Slider Inicio</span></a>
                    <a href="agregar-slider.php"><i class="icon-plus"></i><span>Agregar Slider</span></a>
                    <a href="galeria-de-proyecto.php" class="active"><i class="icon-picture-1"></i><span>Galeria de Proyecto</span></a>
                    <a href="agregar-a-galeria.php"><i class="icon-plus"></i><span>Agregar a Galeria</span></a>
                    <a href="login/php/logout.php"><i class="icon-logout"></i><span>Salir</span></a>
                </nav>
            </div>

            <main class="main col">
                <div class="row">
                    <section class="content container-fluid">
                        <?php if (count($images) > 0) : ?>
                            <table class="table table-bordered">
                                <thead>
                                    <th>Imagen</th>
                                </thead>
                                <?php foreach ($images as $img) : ?>
                                    <tr>
                                        <td><img class="img-fluid" src="<?php echo $img->folder . $img->src; ?>" style="width:240px;"> </td>
                                        <td>
                                            <a class="btn btn-success" href="./download.php?id=<?php echo $img->id; ?>">Descargar</a>
                                            <a class="btn btn-danger" href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        <?php else : ?>

                            <h4 class="alert alert-warning">No hay imagenes!</h4>
                        <?php endif; ?>

                    </section>
                </div>
            </main>
        </div>
    </div>



    <script src="js/jquery-3.3.1.js"></script>
</body>

</html>