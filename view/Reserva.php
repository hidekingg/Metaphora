<?php require("layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>

    <div class="container" style="text-align: center; margin-bottom: 2%;">
        <img src="view/img/BannerMini.png" alt="..." width="70%">
    </div>

    <div class="container">
        <div class="form-container">
            <h2 class="form-title" style="color:  #2b824b;">Reserva tu Viaje</h2>
            <form id="reservaForm">
                <div class="row">
                    <!-- Origen -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="origen" class="form-label">Terminal de Salida</label>
                            <select class="form-select" id="origen" required>
                                <option value="" selected disabled>Seleccione origen</option>
                                <option value="terminal_norte">Terminal Norte</option>
                                <option value="terminal_sur">Terminal Sur</option>
                                <option value="terminal_este">Terminal Este</option>
                                <option value="terminal_oeste">Terminal Oeste</option>
                                <option value="terminal_centro">Terminal Centro</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Destino -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="destino" class="form-label">Destino</label>
                            <select class="form-select" id="destino" required>
                                <option value="" selected disabled>Seleccione destino</option>
                                <option value="ciudad_a">Ciudad A</option>
                                <option value="ciudad_b">Ciudad B</option>
                                <option value="ciudad_c">Ciudad C</option>
                                <option value="ciudad_d">Ciudad D</option>
                                <option value="ciudad_e">Ciudad E</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Fecha -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha" class="form-label">Fecha del Viaje</label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                    </div>
                    
                    <!-- Clase -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="clase" class="form-label">Clase del Autobús</label>
                            <select class="form-select" id="clase" required>
                                <option value="" selected disabled>Seleccione clase</option>
                                <option value="economica">Económica</option>
                                <option value="ejecutiva">Ejecutiva</option>
                                <option value="premium">Premium</option>
                                <option value="cama">Cama</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Horarios  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="horario" class="form-label">Horario</label>
                            <select class="form-select" id="horario" disabled required>
                                <option value="" selected disabled>Seleccione primero origen, destino y fecha</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Asientos -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="asiento" class="form-label">Seleccionar Asiento</label>
                            <select class="form-select" id="asiento" disabled required>
                                <option value="" selected disabled>Seleccione primero el horario</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- Botón de confirmación -->
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-success btn-lg" id="confirmarBtn">Confirmar Viaje</button>
                </div>
            </form>
        </div>
    </div>

</main>

<!--Espacio para el Footer, no tocar-->
<?php require("layout/footer.php"); ?>