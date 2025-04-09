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
        require_once("view/Promociones.php");
    }

    public static function Reserva()
    {
        require_once("view/Reserva.php");
    }

    public static function Terminales()
    {
        require_once("view/Terminales.php");
    }

    public static function Atencion()
    {
        require_once("view/Atencion.php");
    }
}
?>