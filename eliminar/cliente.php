<?php 
include('../bd/conexionMYSQL.php');
$link=Conectarse();
echo $ID=$_REQUEST[id];
$SQL="DELETE FROM maecli WHERE idmaecli='$ID'";

$result=mysql_query($SQL);

if (!$result) {	echo "error";}

else

{

header('Location: /control-de-transporte/consulta/cliente');

}	


 ?>