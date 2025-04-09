<?php
require_once("config.php");
require_once("controller/indexcontroller.php");
if (isset($_GET['i'])):
    $metodo=$_GET['i'];
    if(method_exists('indexcontroller',$metodo)):
            indexcontroller::{$metodo}();
    endif;
else:
    indexcontroller::index();
endif;

?>