<?php
$conexion = new mysqli("localhost", "root", "", "contactos");
if($conexion){
    echo "la gestion fue exitosa!!";
}else{
    echo "Fallo la gestion";
}
?>