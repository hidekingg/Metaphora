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

class Index{
    private $usuarios;
    public function __construct() {
        $this->usuarios = array();
    }

    public function autentificacion($Username,$password){
        include_once("conexion.php");
        $cnn=new Conexion();
        $consulta="SELECT * FROM usuarios WHERE Username = '$Username' AND Password = '$password'";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->usuarios[]=$row;
        }
        return $this->usuarios;    
    }

    public function registrarse($Username1,$password1){
        include_once("conexion.php");
        $cnn=new Conexion();

        if ($this->verificarEmail($Username1)) {
            return "email_existente";
        }

        $consulta="INSERT INTO usuarios(Username,Password, FotoPerfil,
        IdRol)VALUES('$Username1','$password1','view/img/Usuarios/Default.png',1)";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }
        else{
            return false;
        }   
    }

    public function verificarEmail($Username1) {
        include_once("conexion.php");
        $cnn = new Conexion();
        $consulta = "SELECT COUNT(*) as count FROM usuarios WHERE Username LIKE ?";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute([$Username1]);
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        return $row['count'] > 0;
    }
}

class Usuarios{
    private $listaUsuario;

    public function __construct() {
        $this->listaUsuario = array();
    }
    public function mostrarUsuarios(){

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        include_once("conexion.php");
        $Username = $_SESSION['Username'];
        $cnn=new Conexion();
        $consulta="SELECT * FROM usuarios WHERE Username = '$Username'";
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        while ($row = $resultado->fetchAll(PDO::FETCH_ASSOC)) {
            $this->listaUsuario[]=$row;
        }
        return $this->listaUsuario;    
    }
}

class Viajes {
    private $Viajes;

    public function __construct() {
        $this->Viajes = array();
    }

    public function BuscarViajes($origen, $destino, $fecha) {
        include_once("conexion.php");
        $cnn = new Conexion();
        
        $consulta = "SELECT 
            c.LogoClase,
            r.IdRuta,
            tor.Nombre AS TerminalOrigen,
            tdes.Nombre AS TerminalDestino,
            v.FechaSalida,
            v.Precio,
            v.FechaLlegada,
            v.HoraSalida,
            v.HoraLlegada,
            v.IdViaje
        FROM 
            viajes v
        JOIN 
            rutas r ON v.IdRuta = r.IdRuta
        JOIN 
            terminal tor ON r.IdTerminalOrigen = tor.IdTerminal
        JOIN 
            terminal tdes ON r.IdTerminalDestino = tdes.IdTerminal
        JOIN 
            autobuses a ON v.IdAutobus = a.IdAutobus
        JOIN 
            clase c ON a.IdClase = c.IdClase
        WHERE 
            r.IdTerminalOrigen = :origen
            AND r.IdTerminalDestino = :destino
            AND v.FechaSalida = :fecha
            AND v.IdEstatusViaje = 1;";
    
        $resultado = $cnn->prepare($consulta);
        $resultado->bindParam(':origen', $origen);
        $resultado->bindParam(':destino', $destino);
        $resultado->bindParam(':fecha', $fecha);
        $resultado->execute();
    
        // Obtener todos los resultados de una vez
        return $resultado->fetchAll(PDO::FETCH_ASSOC); // Asegúrate de usar fetchAll
    }
}

class MapaTerminales{
    private $listaMapaTerminales;

    public function __construct() {
        $this->listaMapaTerminales = array();
    }
    public function mostrarMapaTerminales(){
        include_once("conexion.php");
        $cnn = new Conexion();
        
        $consulta = "SELECT 
            t.Nombre, 
            t.ImgTerminal, 
            t.Coordenadas, 
            CONCAT(
                t.Direccion,', ',
                t.CP,', ',
                m.Nombre,', ',
                e.Nombre,', ',
                p.Nombre
            ) AS DireccionCompleta 
        FROM 
            `terminal` t
        LEFT JOIN 
            `municipio` m ON t.`Municipio` = m.`IdMunicipio`
        LEFT JOIN 
            `estado` e ON m.`IdEstado` = e.`IdEstado`
        LEFT JOIN 
            `pais` p ON e.`IdPais` = p.`IdPais`;";
        
        $resultado = $cnn->prepare($consulta);
        $resultado->execute();
        return $resultado->fetchAll(PDO::FETCH_ASSOC); // Devuelve directamente todos los resultados
    }
}
?>
