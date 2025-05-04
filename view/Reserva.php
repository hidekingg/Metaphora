<?php require("layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>

    <div class="container" style="text-align: center; margin-bottom: 2%;">
        <img src="view/img/BannerMini.png" alt="..." width="70%">
    </div>

    <div class="Titular">
        <h2>¿A dónde te vamos a llevar?</h2>
    </div>
    
    

    <form id="formularioBusqueda" action="" class="formulario-busqueda">
        <!-- Tipo de viaje -->
        <div class="grupo-formulario">
            <label for="tipoViaje">Tipo de viaje</label>
            <select id="tipoViaje" name="tipo_viaje">
                <option value="1">Directo</option>
                <option value="2">Redondo</option>
            </select>
        </div>

        <div class="divisor"></div>

        <!-- Selector de pasajeros desplegable -->
        <div class="grupo-formulario selector-pasajeros">
            <label>Pasajeros</label>
            <div class="disparador-pasajeros" id="disparadorPasajeros">
                <span class="texto-disparador-pasajeros" id="resumenPasajeros">0 pasajeros</span>
                <span>▼</span>
            </div>
            
            <div class="desplegable-pasajeros" id="desplegablePasajeros">
                <div class="tipo-pasajero">
                    <div class="etiqueta-pasajero">
                        Adulto(s)
                        <small>Más de 12 años</small>
                    </div>
                    <div class="contador-pasajeros">
                        <button type="button" class="boton-pasajero menos" data-tipo="adultos">-</button>
                        <span class="valor-pasajero" id="valorAdultos">0</span>
                        <button type="button" class="boton-pasajero mas" data-tipo="adultos">+</button>
                        <input type="hidden" id="adultos" name="adultos" value="0">
                    </div>
                </div>
                
                <div class="tipo-pasajero">
                    <div class="etiqueta-pasajero">
                        Niño(s)
                        <small>5 a 12 años</small>
                    </div>
                    <div class="contador-pasajeros">
                        <button type="button" class="boton-pasajero menos" data-tipo="ninos">-</button>
                        <span class="valor-pasajero" id="valorNinos">0</span>
                        <button type="button" class="boton-pasajero mas" data-tipo="ninos">+</button>
                        <input type="hidden" id="ninos" name="ninos" value="0">
                    </div>
                </div>
                
                <div class="tipo-pasajero">
                    <div class="etiqueta-pasajero">
                        INAPAM
                        <small>Con credencial vigente</small>
                    </div>
                    <div class="contador-pasajeros">
                        <button type="button" class="boton-pasajero menos" data-tipo="inapam">-</button>
                        <span class="valor-pasajero" id="valorInapam">0</span>
                        <button type="button" class="boton-pasajero mas" data-tipo="inapam">+</button>
                        <input type="hidden" id="inapam" name="inapam" value="0">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="divisor"></div>
        
        <!-- Origen y Destino -->
        <div class="grupo-formulario">
            <label for="origen">Origen</label>
            <select id="origen" name="origen" required>
                <option value="">Desde donde viajas</option>
                <?php
                // Terminales Opciones
                foreach ($data as $key => $value) {         
                    foreach ($value as $terminal) {               
                        echo '<option value="'.$terminal["IdTerminal"].'">'.$terminal["Nombre"].'</option>';
                    }           
                }
                ?>
            </select>
        </div>
        
        <div class="grupo-formulario">
            <label for="destino">Destino</label>
            <select id="destino" name="destino" required>
                <option value="">Hacia donde viajas</option>
                <?php
                // Terminales Opciones
                foreach ($data as $key => $value) {         
                    foreach ($value as $terminal) {               
                        echo '<option value="'.$terminal["IdTerminal"].'">'.$terminal["Nombre"].'</option>';
                    }           
                }
                ?>
            </select>
        </div>
        
        <div class="divisor"></div>
        
        <!-- Fecha -->
        <div class="grupo-formulario">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Buscar viaje">
        <input type="hidden" name="i" value="MandarViajes">
    </form>

</main>

<!--Espacio para el Footer, no tocar-->
<?php require("layout/footer.php"); ?>