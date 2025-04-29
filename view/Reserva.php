<?php require("layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>

    <div class="container" style="text-align: center; margin-bottom: 2%;">
        <img src="view/img/BannerMini.png" alt="..." width="70%">
    </div>

    <div class="Titular">
        <h2>¿A dónde te vamos a llevar?</h2>
    </div>
    
    

    <form id="searchForm" action="" class="search-form">
        <!-- Tipo de viaje -->
        <div class="form-group">
            <label for="tipo-viaje">Tipo de viaje</label>
            <select id="tipo-viaje" name="tipo_viaje">
                <option value="1">Directo</option>
                <option value="2">Redondo</option>
            </select>
        </div>

        <div class="divider"></div>

        <!-- Selector de pasajeros desplegable -->
        <div class="form-group passenger-selector">
            <label>Pasajeros</label>
            <div class="passenger-trigger" id="passengerTrigger">
                <span class="passenger-trigger-text" id="passengerSummary">0 pasajeros</span>
                <span>▼</span>
            </div>
            
            <div class="passenger-dropdown" id="passengerDropdown">
                <div class="passenger-type">
                    <div class="passenger-label">
                        Adulto(s)
                        <small>Más de 12 años</small>
                    </div>
                    <div class="passenger-count">
                        <button type="button" class="passenger-btn minus" data-type="adultos">-</button>
                        <span class="passenger-value" id="adultos-value">0</span>
                        <button type="button" class="passenger-btn plus" data-type="adultos">+</button>
                        <input type="hidden" id="adultos" name="adultos" value="0">
                    </div>
                </div>
                
                <div class="passenger-type">
                    <div class="passenger-label">
                        Niño(s)
                        <small>5 a 12 años</small>
                    </div>
                    <div class="passenger-count">
                        <button type="button" class="passenger-btn minus" data-type="ninos">-</button>
                        <span class="passenger-value" id="ninos-value">0</span>
                        <button type="button" class="passenger-btn plus" data-type="ninos">+</button>
                        <input type="hidden" id="ninos" name="ninos" value="0">
                    </div>
                </div>
                
                <div class="passenger-type">
                    <div class="passenger-label">
                        INAPAM
                        <small>Con credencial vigente</small>
                    </div>
                    <div class="passenger-count">
                        <button type="button" class="passenger-btn minus" data-type="inapam">-</button>
                        <span class="passenger-value" id="inapam-value">0</span>
                        <button type="button" class="passenger-btn plus" data-type="inapam">+</button>
                        <input type="hidden" id="inapam" name="inapam" value="0">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <!-- Origen y Destino -->
        <div class="form-group">
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
        
        <div class="form-group">
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
        
        <div class="divider"></div>
        
        <!-- Fecha -->
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Buscas viaje">
        <input type="hidden" name="i" value="MandarViajes">
    </form>

</main>

<!--Espacio para el Footer, no tocar-->
<?php require("layout/footer.php"); ?>