<?php

  
function Conectarse()

{
if(!($link=mysql_connect("192.168.1.28","root","sistemas")))
{

echo"error de conexion :P";

	exit();
}
  if (!mysql_select_db("control_de_transporte",$link)) 
  {

  	echo"Error seleccionando la base de datos";

  	exit();
}

return $link;

}


  ?>