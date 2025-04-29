<?php require("view/layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>

<?php
/*echo "<pre>";
print_r($data);
echo "</pre>";*/
?>
<center>
<?php if (!empty($data) && is_array($data)): ?>
    <?php
        foreach ($data as $Viaje) { // Iterar sobre cada viaje en el arreglo
            echo '<div class="card mb-3" style="width: 80%;">';
            echo '<div class="row g-0">';
            echo '<div class="col-md-4">';
            echo '<img src="'.$Viaje['LogoClase'].'" width="80%" class="d-flex align-items-center">';
            echo '</div>';
            echo '<div class="col-md-8">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title" style="text-align: left;">'.$Viaje['FechaSalida'].'</h5>';
            echo '<h6 class="card-title" style="text-align: left;">$'.$Viaje['Precio'].'</h6>';
            echo '<p class="card-text" style="text-align: left;">Origen: '.$Viaje['TerminalOrigen'].'<br>Destino: '.$Viaje['TerminalDestino'].'</p>';
            echo '<p class="card-text" style="text-align: left;"><small class="text-body-secondary">Hora de Salida: '.$Viaje['HoraSalida'].' - Hora de Llegada: '.$Viaje['HoraLlegada'].'</small></p>';
            
            // Centrar el botón
            echo '<div class="row g-0">'; // Clase para centrar
            echo '<input type="submit" class="btn btn-success" value="Seleccionar">';
            echo '</div>'; // Cierre del div de centrado
            echo '</div>'; // Cierre del card-body
            echo '</div>'; // Cierre del col-md-8
            echo '</div>'; // Cierre del row
            echo '</div>'; // Cierre del card
        }
    ?>
<?php else: ?>
    <div class="Titular">
        <h2>No se encontraron viajes para los criterios seleccionados.</h2>
    </div>
    
<?php endif; ?>
</center>
</main>

<!--Espacio para el Footer, no tocar-->
<?php require("view/layout/footer.php"); ?>