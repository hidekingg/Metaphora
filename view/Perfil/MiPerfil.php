<?php require("view/layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>

<table width="100%">
	<tbody>
		<tr>
			<td colspan="2">
                <nav class="navbar navbar-expand">
                <div class="contenedor">
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?i=MiPerfil">Mi perfil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Mis viajes</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Configuración</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
            </td>
		</tr>
		<tr>
			<td style="width: 35%">
                <?php
                    echo'<div class="perfiles">';
                    echo'<div class = "Titular">';
                    echo'<h2><b>Bienvenido:</b><br>'.$_SESSION['Username'].'</h2>';
                    echo'<center>';
                    echo'<img src="'.$_SESSION['FotoPerfil'].'" alt="Perfil" class="profile-img" style="width: 40%; border-radius: 50%; outline: 8px solid #2b824b;">';
                    echo'</center>';
                    echo'</div>';
                    echo'</div>';
                ?>
            </td>
			<td style="width: 65%">
                <div class="Titular">
                <div class="perfiles2">
                    <h2 style="text-align: left;">Informacion personal</h2>
                </div>
                </div>

                <?php
                foreach ($data as $key => $value) {         
                    foreach ($value as $usuarios) {
                        echo'<div class="perfiles2">';
                        echo '<p><b>Nombre: </b>'.$usuarios["Nombre"].'</p>';
                        echo '<p><b>Apellido paterno: </b>'.$usuarios["Paterno"].'</p>';
                        echo '<p><b>Apellido materno: </b>'.$usuarios["Materno"].'</p>';
                        echo '<p><b>Edad: </b>'.$usuarios["Edad"].'</p>';
                        echo '<p><b>Sexo: </b>'.$usuarios["Sexo"].'</p>';
                        echo '<p><b>Direccion: </b>'.$usuarios["Direccion"].'</p>';
                        echo '<p><b>CP: </b>'.$usuarios["CP"].'</p>';
                        echo '<p><b>Telefono: </b>'.$usuarios["Telefono"].'</p>';
                        echo'</div>';
                    }           
                }
                ?>
            </td>
		</tr>
	</tbody>
</table>

   




</main>

<!--Espacio para el Footer, no tocar-->
<?php require("view/layout/footer.php"); ?>