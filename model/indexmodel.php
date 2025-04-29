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

class Terminales{
    private $listaTerminales;

    public function __construct() {
        $this->listaTerminales = array();
    }
    public function mostrarTerminales(){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="SELECT IdTerminal, Nombre FROM terminal ORDER BY Nombre";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->listaTerminales[]=$row;
        }
        return $this->listaTerminales;    
    }
}
?>
