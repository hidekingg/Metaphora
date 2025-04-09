<?php require("layout/header.php"); ?>
<!--Espacio para el Header, no tocar-->

<main>
    </table>
    <table width="100%" cellspacing="20">
        <tr>
            <td width="50%" align="center">
                <h3>A donde vas a viajar?</h3>
                <table width="85%" border="1">
                    <tr>
                        <td align="center"><b>viaje redondo</b></td>
                        <td align="center"><b>viaje redondo</b></td>
                    </tr>
                </table>
                <form action="#" method="post">
                    <table>
                        <tr>
                            <td><input type="text" size="35"></td>
                            <td align="center">↔</td>
                            <td><input type="text" size="35"></td>
                        </tr>
                        <tr>
                            <td align="center">origen</td>
                            <td></td>
                            <td align="center">seleccione un destino</td>
                        </tr>
                        <tr>
                            <td><input type="text" size="35"> <img src="view/img/calendario.jpg" width="20" height="20"></td>
                            <td></td>
                            <td><input type="text" size="35"> <img src="view/img/calendario.jpg" width="20" height="20"></td>
                        </tr>
                        <tr>
                            <td align="center">salida</td>
                            <td></td>
                            <td align="center">regreso</td>
                        </tr>
                        <tr>
                            <td>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <option>pasajeros</option>
                            </td>
                            
                            <td></td>
                            <td><input type="text" size="35"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><small>¿Tienes un código de promoción? (Opcional)</small></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <small><a href="index.php?i=Promociones">ver promociones disponibles</a></small>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center">
                                <input type="submit" value="BUSCAR">
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
            <td width="50%" align="center">
                <img src="view/img/turismo.webp" width="500" height="300" alt="turismo">
                <br>
                <table width="30%">
                    <tr>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    </main>

<!--Espacio para el Footer, no tocar-->
<?php require("layout/footer.php"); ?>