<?php 
require_once "empresa.php";
$db = conectaDB();

$dbTabla="clientes";

$id=$_POST['id_mod'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$direccion=$_POST['direccion'];

$consulta = "UPDATE $dbTabla
    SET nombre=:nombre, apellido=:apellido, sexo=:sexo, edad=:edad, direccion=:direccion
    WHERE id=:id";
$result = $db->prepare($consulta);
if ($result->execute([":nombre" => $nombre, ":apellido" => $apellido,":sexo" => $sexo,":direccion" => $direccion,":edad" => $edad, ":id" => $id])) {
    print "    <p>Registro modificado correctamente.</p>\n";
    print "\n";
} else {
    print "    <p>Error al modificar el registro.</p>\n";
    print "\n";
}
echo "<br><a href='index.html'>Volver</a>";
?>