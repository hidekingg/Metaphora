<?php
require_once("model/indexmodel.php");
class indexcontroller{
    private $indexmodel;
    public function __construct()
    {
        
    }

    public static function index()
    {
        require_once("view/index.php");
    }

    public static function Promociones()
    {
        $indexmodel=new Promociones();
        $data = $indexmodel->mostrarUltimosPromociones();
        require_once("view/Promociones.php");
    }

    public static function Reserva()
    {
        $indexmodel=new Terminales();
        $data = $indexmodel->mostrarTerminales();
        require_once("view/Reserva.php");
    }

    public static function Terminales()
    {
        require_once("view/Terminales.php");
    }

    public static function Atencion()
    {
        require_once("view/Ayuda/Atencion.php");
    }
    public static function Marcas()
    {
        require_once("view/Ayuda/Marcas.php");
    }
    public static function AcercaDe()
    {
        require_once("view/Ayuda/AcercaDe.php");
    }
    public static function MetodosDePago()
    {
        require_once("view/Ayuda/MetodosDePago.php");
    }
    public static function AvisoPrivacidad()
    {
        require_once("view/Ayuda/AvisoPrivacidad.php");
    }
    public static function TerminosYCondiciones()
    {
        require_once("view/Ayuda/TerminosYCondiciones.php");
    }
}
?>