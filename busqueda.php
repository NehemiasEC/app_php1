<?php
/**
 * Created by PhpStorm.
 * User: nehemiasec
 * Date: 2/19/17
 * Time: 7:19 PM
 */
header('Content-Type: charset=utf-8');
require_once "conexion.php";


$conexion=mysqli_connect($db_host,$db_user,$db_password);

if((mysqli_connect_errno()))
{
    echo "Error al intentar conectar a la base da datos";
    exit();
}
mysqli_select_db($conexion,$db_name);

mysqli_set_charset($conexion,"UTF-8");

$consulta="SELECT * FROM Hoja1 WHERE PAISDEORIGEN='ITALIA'";

$resultados=mysqli_query($conexion,$consulta);


while($fila=mysqli_fetch_assoc($resultados))
{
    echo "<table><tr><td>";
    echo $fila['CODART']."</td><td>";
    echo $fila['SECCION']."</td><td>";
    echo $fila['NOMBREARTICULO']."</td><td>";
    echo "$". $fila['PRECIO']."</td><td>";
    echo $fila['PAISDEORIGEN']."</td><td></tr></table>";

}