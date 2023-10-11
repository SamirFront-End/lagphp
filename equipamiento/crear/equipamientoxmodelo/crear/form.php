<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../assents/css/reset.css">
    <link rel="stylesheet" href="../../../../assents/css/equipamiento/tipos/crear/crearxmodelo.css">
    <link rel="icon" href="../../../../assents/img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/76750b34bb.js" crossorigin="anonymous"></script>
    <title>LaRusso Auto Group</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img class="logo-img" src="../../../../assents/img/logo2.png" alt="">
            </div>
            <div class="menu">
                <a class="link" href="../../../../vehiculos/index.php">Vehiculo</a>
                <a class="link" href="../../../../equipamiento/index.php">Equipamiento</a>
                <a class="link" href="../../../../vendedores/index.php">Vendedores</a>
                <a class="link" href="../../../../sucursales/index.php">Sucursales</a>
                <a class="link" href="../../../../ventas/index.php">Ventas</a>
            </div>
            <div class="cnx">
                <?php
                    require ("../../../../cnx.php");
                ?>
            </div>
        </nav>
    </header>
    <section class="sct-xmodelo">
        <div class="title">
            <img src="../../../../assents/img/lagicons/tools-svgrepo-com.svg" alt="" class="img-title">
            <h1 class="h1-title">Configurar equipamiento por modelo de vehiculo</h1>
        </div>
        <form method="POST" action="sucess.php" class="frm-xmodel">
            <div class="crd-xmodel">
                <div class="cont-img">
                    <img src="../../../../assents/img/lagicons/car-roof-box-svgrepo-com.svg" alt="" class="img-xmodel">
                </div>
                <div class="title-xmodel">
                    <h3 class="h3-xmodel">Selecciona la serie del vehiculo</h3>
                </div>
                <?php
                    include("consultSerie.php");
                ?>
                <!-- <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-model">Jhon Cooper
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-model">Jhon Cooper
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-model">Jhon Cooper
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-model">Jhon Cooper
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-model">Jhon Cooper
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-model">Jhon Cooper
                </label> -->
            </div>
            <div class="crd-xmodel">
                <div class="cont-img">
                    <img src="../../../../assents/img/lagicons/tasks-list-svgrepo-com.svg" alt="" class="img-xmodel">
                </div>
                <div class="title-xmodel">
                    <h3 class="h3-xmodel">Selecciona el tipo de equipamiento</h3>
                </div>
                <?php
                    include("consultTeq.php");
                ?>
                <!-- <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-teq">Original
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="radio" class="inp-teq">Adicional
                </label> -->
            </div>
            <div class="crd-xmodel">
                <div class="cont-img">
                    <img src="../../../../assents/img/lagicons/car-seat-svgrepo-com.svg" alt="" class="img-xmodel">
                </div>
                <div class="title-xmodel">
                    <h3 class="h3-xmodel">Selecciona el equipamiento</h3>
                </div>
                <?php
                    include("consultEq.php");
                ?>
                <!-- <label for="" class="lbl-xmodel">
                    <input type="checkbox" class="inp-eq">Equipamiento
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="checkbox" class="inp-eq">Equipamiento
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="checkbox" class="inp-eq">Equipamiento
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="checkbox" class="inp-eq">Equipamiento
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="checkbox" class="inp-eq">Equipamiento
                </label>
                <label for="" class="lbl-xmodel">
                    <input type="checkbox" class="inp-eq">Equipamiento
                </label> -->
            </div>
            <div class="btn-xmodel">
                <input class="submit-xmodel" type="submit" value="Agregar">
            </div>
        </form>
    </section>
    <footer>
        <div class="footer">
            <div class="dev">
                <p class="p-footer"><strong>Samir Ramírez</strong> Desarrollador Front-End</p>
                <p class="p-footer">Medellín - Colombia <strong>2023</strong></p>
            </div>
            <div class="networks">
                <a class="icon_link" href="https://github.com/SamirFront-End" target="github"><i class="fa-brands fa-github"></i></a>
                <a class="icon_link" href="https://www.linkedin.com/in/samir-ramirez-0254621a5/" target="linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                <a class="icon_link" href="https://instagram.com/miramirez1987" target="instagram"><i class="fa-brands fa-instagram"></i></a>
                <a class="icon_link" href="https://www.facebook.com/samiramirez1987" target="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a class="icon_link" href="https://www.tiktok.com/@samdevfreelance" target="tiktok"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>