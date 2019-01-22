<?php 

// EJEMPLO DE CONSULTA DE SELECCIÓN DE REGISTROS
require_once "empresa.php";
$db = conectaDB();

$dbTabla="clientes";

$consulta = "SELECT * FROM $dbTabla";
$result = $db->query($consulta);
if (!$result) {
    print "    <p>Error en la consulta.</p>\n";
} else {
    print "    <p>Id     |   Nombre  |    Apellido    |    Sexo    |    Edad     |   Direccion| </p>\n";
    foreach ($result as $valor) {
        if($valor['sexo']==0)
        {
            print "<p>$valor[id]    |    $valor[nombre]      |    $valor[apellido]    |    Femenino    |    $valor[edad]      | $valor[direccion]|</p>";
        }
        else{
            print "<p>$valor[id]    |    $valor[nombre]      |    $valor[apellido]    |    Masculino    |    $valor[edad]    |  $valor[direccion]|</p>";
        }    
    }
}

$db = null;
echo "<br><a href='index.html'>Volver</a>";
?>