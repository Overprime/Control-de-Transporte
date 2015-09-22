<?php 
include('../bd/conexionMYSQL.php');
$link=Conectarse();
$ID=$_REQUEST['id'];
$NOMBRE=$_REQUEST['nombre'];
$DESCRIPCION=$_REQUEST['descripcion'];

$Sql="UPDATE  transporte  SET nombre='$NOMBRE',
descripcion='$DESCRIPCION' WHERE idtransporte='$ID'";

$result=mysql_query($Sql);

if (!$result) {echo "error";}
else
{

header('Location: /control-de-transporte/pages/unidad-transporte');
}



 ?>