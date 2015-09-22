<?php 
include('../bd/conexionMYSQL.php');
$link=Conectarse();
$ID=$_REQUEST['id'];
$Sql="UPDATE  transporte set estado='06' WHERE idtransporte='$ID'";

$result=mysql_query($Sql);

if (!$result) {echo "error";}
else
{

header('Location: /control-de-transporte/pages/unidad-transporte');
}



 ?>