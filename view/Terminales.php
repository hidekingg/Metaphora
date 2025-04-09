<?php require("layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>
            <div class="Titular" align="Center" valign="top" width="50%">
                <h2>Terminales</h2>
                <p>Comienza un gran viaje desde nuestras terminales,<br> conoce toda su información para sentirte en casa.</p>
                <h3>¿Dónde te encuentras?</h3>
                <input type="text" name="ubicacion" id="ubicacion">
                <img src="view/img/img7.webp" alt="img7" width="20px">
                <button>Buscar</button>
            </div>
            <br><br>
            <div class="Titular" align="Center" valign="top" width="50%">
                <h3>Terminal de Autobuses</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.053973129258!2d-96.71713192488822!3d17.067231588229966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c72242e88b80c5%3A0x82a9649736f4d8c7!2sAutobuses%20AEXA!5e0!3m2!1ses!2smx!4v1712256180902!5m2!1ses!2smx" 
                    width="60%" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe> 
            </div>
            <br><br>
    </main>  

<!--Espacio para el Footer, no tocar-->
<?php require("layout/footer.php"); ?>