<?php
//clasepara crear un objeto de tipo conexion a la base de datos
class Conexion
{
	public static function conectar()
	{
		//Declarando los parametros como nombre de la base y usuario y contraseña de la bd
		$link = new PDO("mysql:host=localhost;dbname=car_wash","admin","ariel2511");
		return $link;
	}
}
?>
