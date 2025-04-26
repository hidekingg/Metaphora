<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Metaphora</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/EsModal.css">
    <link rel="stylesheet" type="text/css" href="view/Boostrap/bootstrap.min.css">
    <script type="text/javascript" src="view/Boostrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="view/Boostrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="view/js/main.js"></script>
    <link rel="icon" href="view/img/logo.ico">
</head>
<body>

    <header>

    <nav class="navbar navbar-expand">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?i=index" >
                <img src="view/img/MlogoN.png" alt="Metaphora" width="15%" height="10%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php?i=Promociones">Promociones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?i=Terminales">Terminales</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Viajes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?i=Reserva">Reservar</a></li>
                        <li><a class="dropdown-item" href="#">Buscar viaje</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?i=Atencion">Atención</a>
                </li>
                <li class="nav-item">
                    <!-- Botón que abre el modal de login -->
                    <button id="openLoginModalBtn" class="btn btn-light"><b>Iniciar&nbsp;sesión</b></button>

                    <!-- Modal de Login -->
                    <div id="loginModal" class="modal">
                    <div class="modal-content">
                        <span class="close-modal">&times;</span>
                        
                        <div class="table-responsive d-flex justify-content-center align-items-center">
                        <table class="box">
                            <tbody>
                            <tr class="box-centrado">
                                <td rowspan="2">
                                <img src="view/img/LogoVerde.png" alt="Metaphora" width="50%" style="margin-top: 10%;">

                                <h2>¡Te damos la bienvenida!</h2>
                                <p class="box-margen">
                                    Al iniciar sesión podrás consultar fácilmente tus boletos en tu historial de viajes.
                                    Si aun no tienes una cuenta, es necesario registrarte.
                                </p>

                                <p class="box-margen" style="justify-content: center;">
                                    <br>
                                    📌 Crea tu propio perfil <br>
                                    📍 Guarda viajes frecuentes <br>
                                    🕒 Consulta historial de viaje <br>
                                    ❤️ Administra pasajeros favoritos <br>
                                    🎁 Recibe ofertas y promociones <br>
                                    🔒 Confía, tu información está segura <br><br> 
                                </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                <form>
                                    <div class="mb-3">
                                    <label for="LogEmail" class="form-label"><b>Correo</b></label>
                                    <input type="email" class="form-control" id="LogEmail" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                                    <div id="emailHelp" class="form-text">Por tu seguridad, no compartas tu cuenta con nadie mas.</div>
                                    </div>
                                    <div class="mb-3">
                                    <label for="LogPassword" class="form-label"><b>Contraseña</b></label>
                                    <input type="password" class="form-control" id="LogPassword" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="LogRemind">
                                    <label class="form-check-label" for="LogRemind"><b>Recordarme</b></label>
                                    </div>
                                    <button type="submit" class="btn btn-success">Iniciar sesión</button>
                                </form><br>
                                </td>
                            </tr>
                            <tr class="box-centrado">
                                <td colspan="2">
                                <a href="reserva.html" id="forgotPasswordLink"><b>Olvidaste tu contraseña</b></a>
                                <p><b>¿Deseas registrarte?</b><br> <a href="#" id="openRegisterFromLogin"><b>Registrate</b></a></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>

                    <!-- Modal de Registro -->
                    <div id="registerModal" class="modal">
                    <div class="modal-content">
                        <span class="close-modal">&times;</span>
                        
                        <div class="table-responsive d-flex justify-content-center align-items-center">
                        <table class="box">
                            <tbody>
                            <tr class="box-centrado">
                                <td rowspan="2">
                                <img src="view/img/LogoVerde.png" alt="Metaphora" width="50%">

                                <h2>¡Te damos la bienvenida!</h2>
                                <p class="box-margen">
                                    Al iniciar sesión podrás consultar fácilmente tus boletos en tu historial de viajes.
                                    Si aun no tienes una cuenta, es necesario registrarte.
                                </p>

                                <p class="box-margen" style="justify-content: center;">
                                    <br>
                                    📌 Crea tu propio perfil <br>
                                    📍 Guarda viajes frecuentes <br>
                                    🕒 Consulta historial de viaje <br>
                                    ❤️ Administra pasajeros favoritos <br>
                                    🎁 Recibe ofertas y promociones <br>
                                    🔒 Confía, tu información está segura <br><br> 
                                </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">
                                <form>
                                    <div class="mb-3">
                                    <label for="Nombre" class="form-label"><b>Nombre(s)</b></label>
                                    <input class="form-control" type="text" placeholder="Ingresa tu nombre" id="Nombre">
                                    </div>
                                    <div class="mb-3">
                                    <label for="Apellidos" class="form-label"><b>Apellido(s)</b></label>
                                    <input class="form-control" type="text" placeholder="Ingresa tus apellidos" id="Apellidos">
                                    </div>
                                    <div class="mb-3">
                                    <label for="Email" class="form-label"><b>Correo</b></label>
                                    <input type="email" class="form-control" id="Email" placeholder="Ingresa tu correo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="Password" class="form-label"><b>Contraseña</b></label>
                                    <input type="password" class="form-control" id="Password" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="mb-3">
                                    <label for="PasswordCon" class="form-label"><b>Confirmar contraseña</b></label>
                                    <input type="password" class="form-control" id="PasswordCon" placeholder="Confirma tu contraseña">
                                    </div>
                                    <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="Terms">
                                    <label class="form-check-label" for="Terms"><b>Estoy de acuerdo con los <a href="#">Terminos y condiciones</a></b></label>
                                    </div>
                                    <button type="submit" class="btn btn-success">Registrarte</button>
                                </form> <br>
                                </td>
                            </tr>
                            <tr class="box-centrado">
                                <td colspan="2">
                                <p><b>¿Ya tienes una cuenta?</b> <br> <a href="#" id="openLoginFromRegister"><b>Inicia sesión</b></a></p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                    <!--Fin de modal-->
                </li>
            </ul>
        </div>
        </div>
    </nav>

    </header>

<!--Header actualizado 2.0-->
<!--------------------------------------------------------------------------------------------------->