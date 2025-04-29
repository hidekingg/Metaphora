<?php

require_once("model/indexmodel.php");
class indexcontroller{
    private $indexmodel;
    public function __construct()
    {
        $indexmodel = new Index();
    }

    public static function index()
    {
        require_once("view/index.php");
    }

    public static function guardarRegistro(){
        $Username1=$_REQUEST['Username1'];
        $password1=$_REQUEST['password1'];
        $indexmodel=new Index();
        $resultado=$indexmodel->registrarse($Username1, $password1);

        if ($resultado === "email_existente") {
            $_SESSION['error'] = "El correo electrónico ya está registrado";
        } elseif ($resultado === true) {
            $_SESSION['success'] = "Registro exitoso";
        } else {
            $_SESSION['error'] = "Error al registrar el usuario";
        }

            header("location:".urlsite."index.php?i=index");
    }

    public static function autenticar(){
        $Username=$_REQUEST['Username'];
        $password=$_REQUEST['password'];
        $indexmodel=new Index();
        $resultado=$indexmodel->autentificacion($Username,$password);
        var_dump($resultado);
        session_start();
        if(isset($resultado)):
            foreach ($resultado as $key => $value){
                foreach ($value as $item ){              
                    $Username=$item['Username']; 
                    $_SESSION["IdUsuario"] = $item['IdUsuario'];
                    $_SESSION["Username"] = $item['Username']; 
                    $_SESSION["FotoPerfil"] = $item['FotoPerfil'];
                    $_SESSION["IdRol"] =  $item['IdRol'];  
                    $_SESSION["IdEmpleado"] = $item['IdEmpleado'];
                    $_SESSION["IdCliente"] = $item['IdCliente'];
                }
            }
        endif;   
        header("location:".urlsite."index.php?i=index");
    }
    public static function cerrarSesion(){	
        session_start();
        if(session_destroy()){
            header("location:".urlsite."index.php?i=index");
        }	       
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

    public static function BuscarViajes()
    {
        require_once("view/Viajes/BuscarViajes.php");
    }

    public static function MandarViajes() {
        $origen = $_REQUEST['origen'];
        $destino = $_REQUEST['destino'];
        $fecha = $_REQUEST['fecha'];
        
        $indexmodel = new Viajes();
        $data = $indexmodel->BuscarViajes($origen, $destino, $fecha);
    
        // Verifica si hay resultados antes de redirigir
        if (!empty($data)) {
            require_once("view/Viajes/BuscarViajes.php");
        } else {
            header("location:".urlsite."index.php?i=BuscarViajes");
        }
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
    public static function MiPerfil()
    {
        $indexmodel=new Usuarios();
        $data = $indexmodel->mostrarUsuarios();
        require_once("view/Perfil/MiPerfil.php");
    }
}
?>