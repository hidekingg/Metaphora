<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Metaphora</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/EsModal.css">
    <link rel="stylesheet" href="view/css/viaje.css">
    <link rel="stylesheet" href="view/css/map.css">
    <link rel="stylesheet" type="text/css" href="view/Boostrap/bootstrap.min.css">
    <script type="text/javascript" src="view/Boostrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="view/Boostrap/js/bootstrap.bundle.min.js"></script>
    <script defer src="view/js/terminal.js"></script>
    <script defer src="view/js/main.js"></script>
    <script defer src="view/js/viaje.js"></script>
    <link rel="icon" href="view/img/logo.ico">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <link rel="stylesheet" href="style.css">
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    ?>
</head>
<body>
    
    <header>

    <nav class="navbar navbar-expand fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?i=index" >
                <img src="view/img/MlogoN.png" alt="Metaphora" class="navbar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarScroll">
            <ul class="navbar-nav align-items-center" style="--bs-scroll-height: 100px;">
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
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="index.php?i=Reserva">Reservar</a></li>
                        <li><a class="dropdown-item" href="#">Buscar viaje</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ayuda
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="index.php?i=Atencion">Atención</a></li>
                        <li><a class="dropdown-item" href="index.php?i=Marcas">Marcas</a></li>
                        <li><a class="dropdown-item" href="index.php?i=AcercaDe">Acerca de Metaphora</a></li>
                        <li><a class="dropdown-item" href="index.php?i=MetodosDePago">Metodos de pago</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">

                <?php      
                           
                    if(isset($_SESSION["IdUsuario"])){
                        if($_SESSION["IdUsuario"]==0){
                        echo '<button id="openLoginModalBtn" class="btn btn-light"><b>Iniciar&nbsp;sesión</b></button>';
                        }
                        else{
                                echo'<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                                echo'<img src="'.$_SESSION['FotoPerfil'].'" alt="Perfil" class="profile-img" style="width: 45px; height: 45px; border-radius: 50%; outline: 4px solid #E8F0DE; object-fit: cover;">';
                                echo'</a>';
                                echo'<ul class="dropdown-menu dropdown-menu-end">';
                                echo'<li><a class="dropdown-item" href="index.php?i=MiPerfil">Mi perfil</a></li>';       
                                echo'<li><hr class="dropdown-divider"></li>';    
                                echo'<li><a class="dropdown-item" href="index.php?i=cerrarSesion">Cerrar sesión</a></li>';    
                                echo'</ul>';
                                echo'</li>';
                            
                            }
                        }
                        else{
                        echo '<button id="openLoginModalBtn" class="btn btn-light"><b>Iniciar&nbsp;sesión</b></button>';        
                        }
                ?>

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
                                <form action=""> 
                                    <div class="mb-3">
                                    <label for="LogEmail" class="form-label"><b>Correo</b></label>
                                    <input type="text" class="form-control" id="LogEmail" name="Username" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                                    <div id="emailHelp" class="form-text">Por tu seguridad, no compartas tu cuenta con nadie mas.</div>
                                    </div>
                                    <div class="mb-3">
                                    <label for="LogPassword" class="form-label"><b>Contraseña</b></label>
                                    <input type="password" class="form-control" id="LogPassword" name="password" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Enviar">
                                    <input type="hidden" name="i" value="autenticar">
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
                                <form action=""> 
                                    <div class="mb-3">
                                    <label for="LogEmail" class="form-label"><b>Correo</b></label>
                                    <input type="text" class="form-control" id="LogEmail1" name="Username1" placeholder="Ingresa tu correo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="LogEmail" class="form-label"><b>Confirmar Correo</b></label>
                                    <input type="text" class="form-control" id="LogEmail2" name="Username2" placeholder="Ingresa tu correo">
                                    </div>
                                    <div class="mb-3">
                                    <label for="LogPassword" class="form-label"><b>Contraseña</b></label>
                                    <input type="password" class="form-control" id="LogPassword1" name="password1" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <div class="mb-3">
                                    <label for="LogPassword" class="form-label"><b>Confirmar Contraseña</b></label>
                                    <input type="password" class="form-control" id="LogPassword2" name="password2" placeholder="Ingresa tu contraseña">
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Registrarse">
                                    <input type="hidden" name="i" value="guardarRegistro">
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