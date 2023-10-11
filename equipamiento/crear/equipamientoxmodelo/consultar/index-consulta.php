<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../assents/css/reset.css">
    <link rel="stylesheet" href="../../../../assents/css/equipamiento/tipos/consultar/consultindex.css">
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
    <section class="sct-srch-tipo">
        <article class="cards">
            <div class="img-card">
                <img src="../../../../assents/img/lagicons/magnifying-glass-8-svgrepo-com.svg" alt="Buscar vehiculo" class="img-srch">
            </div>
            <div class="body-card">
                <h1 class="p-card">Buscar equipamiento por serie</h1>
            </div>
            <div class="footer-card">
                <h3 class="txt-card">Aqui puede obtener el listado de equipamientos disponibles en nuestro concesionario para cada serie de vehiculo</h3>
            </div>
        </article>
    </section>
    <section class="search">
        <div class="resul">
            <form method="POST" action="">
                    <input class="buscar" type="text" name="bscr" placeholder="Buscar">
                    <input class="btn-submit" type="submit" name="send" value= "Buscar">
            </form>
        </div>
    </section>
    <section class="resultado">
    <div class="title">
            <h1 class="h1-title">
                Lista de equipamiento por serie
            </h1>
        </div>
        <?php
            include ("function-consulta.php");
        ?>
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