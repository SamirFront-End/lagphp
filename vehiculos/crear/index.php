<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assents/css/reset.css">
    <link rel="stylesheet" href="../../assents/css/crear/crear.css">
    <link rel="icon" href="../../assents/img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/76750b34bb.js" crossorigin="anonymous"></script>
    <title>LaRusso Auto Group</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img class="logo-img" src="../../assents/img/logo2.png" alt="">
            </div>
            <div class="menu">
                <a class="link" href="../../vehiculos/index.php">Vehiculo</a>
                <a class="link" href="../../equipamiento/index.php">Equipamiento</a>
                <a class="link" href="../../vendedores/index.php">Vendedores</a>
                <a class="link" href="../../sucursales/index.php">Sucursales</a>
                <a class="link" href="../../ventas/index.php">Ventas</a>
            </div>
            <div class="cnx">
                <?php
                    require ("../../cnx.php");
                ?>
            </div>
        </nav>
    </header>
    <section>
        <article class="cards">
            <div class="img-card">
                <img src="../../assents/img/lagicons/iconmonstr-plus-circle-filled.svg" alt="Buscar vehiculo" class="img-srch">
            </div>
            <div class="body-card">
                <h1 class="p-card">Agregar nuevos vehiculos</h1>
            </div>
            <div class="footer-card">
                <h3 class="txt-card">Aqui puede agregar nuevas unidades a nuestro listado de vehiculos</h3>
            </div>
        </article>
    </section>
    <section class="sct-create">
        <form method="POST" action="../../vehiculos/crear/sucess.php" class="frm-create">
            <fieldset class="fld-create">
                <legend class="leg-create">Registrar nuevo vehiculo</legend>
                <div class="creation">
                    <div class="field-create">
                        <label class="lbl-create" for="">Marca</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Marca" name="marca" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Serie</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Serie" name="serie" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Modelo</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Modelo" name="modelo" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">#Bastidor</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Numero de bastidor" name="bastidor" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Potencia</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Potencia" name="potencia" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Motor</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Motor" name="motor" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">#Cilindros</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Numero de Cilindros" name="cilindros" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Cilindrada</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="text" class="inp-create" placeholder="Ingresar Cilindrada" name="cilindrada" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Precio</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="number" class="inp-create" placeholder="Ingresar Precio" name="precio" required>
                    </div>
                    <div class="field-create">
                        <label class="lbl-create" for="">Descuento</label>
                    </div>
                    <div class="inp-field-create">
                        <input class="inp-create" type="number" class="inp-create" placeholder="Ingresar Descuento" name="descuento" required>
                    </div>
                    <div class="cont-btn">
                        <input class="btn-submit" type="submit" name="send" value= "Registrar">
                    </div>
                </div>
            </fieldset>
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