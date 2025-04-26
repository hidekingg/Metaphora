<?php
class Promociones{
    private $listaPromociones;

    public function __construct() {
        $this->listaPromociones = array();
    }
    public function mostrarUltimosPromociones(){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="SELECT Condiciones, ImagenPromocion FROM promociones
        WHERE activo = 1 Order by IdPromocion DESC LIMIT 6";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->listaPromociones[]=$row;
        }
        return $this->listaPromociones;    
    }
}
?>
