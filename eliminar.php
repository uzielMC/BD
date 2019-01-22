<?php 
require_once "empresa.php";
$db = conectaDB();
$dbTabla="clientes";

$id = $_POST['id'];
$sql = "DELETE FROM $dbTabla WHERE id=:id";
$query = $db ->prepare($sql);
if($query->execute(array(':id' => $id))) {
 echo 'Se Elimino el registro: '.$id;
}
else
 echo 'No se pudo eliminar el registro: '.$id;
echo "<br><a href='index.html'>Volver</a>";
?>