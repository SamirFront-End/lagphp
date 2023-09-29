<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assents/css/reset.css">
    <link rel="stylesheet" href="assents/css/index/index1.css">
    <link rel="icon" href="../assents/img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/76750b34bb.js" crossorigin="anonymous"></script>
    <title>LaRusso Auto Group</title>
</head>
<body>
    <header class="h-index">
        <nav class="nav-index">
            <div class="fic">
                <span></span>
            </div>
            <div class="menu">
                <a class="link" href="">Vehiculo</a>
                <a class="link" href="">Equipamiento</a>
                <a class="link" href="">Vendedores</a>
                <a class="link" href="">Sucursales</a>
                <a class="link" href="">Ventas</a>
            </div>
            <div class="cnx">  
                <i class="fa-regular fa-circle-user"></i>
                <!-- <i class="fa-solid fa-circle-user"></i> -->
            </div>
        </nav>
    </header>
    <section>
        <div class="logo">
            <img src="assents/img/logo.png" alt="LaRusso Auto Group">
        </div>
        <div class="log_frm">
            <form action="" method="post">
                <fieldset>
                    <legend>Ingresar</legend>
                    <div class="i-log">
                        <i class="fa-solid fa-user-lock"></i>
                    </div>
                    <div class="inp-cont">
                        <input type="email" class="inp_log" name="usr" placeholder="Usuario" required autocomplete="off">
                        <label class="inp-lab" for="">Usuario:</label>
                    </div>
                    <div class="inp-cont">
                        <input type="password" class="inp_log" name="psw" placeholder="Contraseña" required autocomplete="off">
                        <label class="inp-lab" for="">Contraseña:</label>
                    </div> 
                    <div class="inp-sub">
                        <input class="submit" type="submit" value="Entrar">
                    </div> 
                    <div class="p-reg">
                        <p>Si no tienes una cuenta  registrate 
                            <a id="a-reg" href="./vehiculos/index.php">aqui</a>
                        </p>
                        <p>Recupera tu contraseña  
                            <a id="a-reg" href="./vehiculos/index.php">aqui</a>
                        </p>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>