<?php
include "db.php";
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
                    <a href="galeria-de-proyecto.php"><i class="icon-picture-1"></i><span>Galeria de Proyecto</span></a>
                    <a href="agregar-a-galeria.php" class="active"><i class="icon-plus"></i><span>Agregar a Galeria</span></a>
                    <a href="login/php/logout.php"><i class="icon-logout"></i><span>Salir</span></a>
                </nav>
            </div>

            <main class="main col">
                <div class="row">
                    <section class="content container-fluid">
                        <h1>Subir imagenes o archivos</h1>
                        <form enctype="multipart/form-data" method="post" action="upload2.php">

                            <div class="form-group">
                                <label for="exampleInputFile">Imagen</label>
                                <input type="file" name="image" required>
                            </div>

                            <input type="submit" value="Subir imagen" class="btn btn-primary">
                        </form>

                    </section>
                </div>
            </main>
        </div>
    </div>



    <script src="js/jquery-3.3.1.js"></script>
</body>

</html>