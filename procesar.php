<?php 


require_once "empresa.php";
$db = conectaDB();

$dbTabla="clientes";


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];

$agregar="INSERT INTO $dbTabla (id,nombre,apellido,sexo,edad,direccion) 
VALUES(
         NULL,
        '$nombre',
        '$apellido',       
        '$sexo',
        '$edad',
        '$direccion')";
        
$ejecutar=$db->query($agregar);
if(!$ejecutar){
    echo "Hubo un error";
}
else
{
    echo "Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
}
?>