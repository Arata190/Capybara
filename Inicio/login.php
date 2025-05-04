<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Registro</title>
</head>
<body>
    <div class="container_form registro">
        <div class="inform">
            <div class="infor_child">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad por favor llenar los datos requeridos </p>
                <input type="submit" value="Iniciar sesión" id="inicio1">
            </div>
        </div>
        <div class="form_informacion">
            <label class="boton">
                <a class="close-button" id="salida1" href="index.html" >X</a>
            </label>
            <div class="form_informacion_chil">
                <h2>Crear una cuenta</h2>
                <div class="iconos">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-twitter'></i>
                    <i class='bx bxl-apple'></i>
                </div>
                <p>O usa tu email para registarte </p>
                <form class="form">
                    <label>
                        <i class='bx bx-user-circle'></i>
                        <input type="text" placeholder="Nombres Completos">
                    </label>
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>





    <div class="container_form login hide " id="iniciar_s">
        <div class="inform">
            <div class="infor_child">
                <h2>¡¡Bienvenido Nuevamente!!</h2>
                <p>Para unirte a nuestra comunidad por favor llenar los datos requeridos </p>
                <input type="submit" value="Registarse" id="sing-up">
            </div>
        </div>
        <div class="form_informacion">
            <label class="boton">
                <a class="close-button" id="salida1" href="index.html" >X</a>
            </label>
            <div class="form_informacion_chil">
                <h2>Iniciar Sesión</h2>
                <div class="iconos">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-twitter'></i>
                    <i class='bx bxl-apple'></i>
                </div>
                <p>O iniciar sesión con una cuenta </p>
                <form class="form">
                    <label>
                        <i class='bx bx-envelope'></i>
                        <input type="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>