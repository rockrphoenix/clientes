<?php
	class Conexion
	{
		protected $conexion;
		protected $id;
		protected $inmobiliaria;
		function __construct()
		{
			//$this->conexion = new mysqli("db539063414.db.1and1.com","dbo539063414", "Palabra!1", "db539063414")or die("No puedo conectarme");
			$this->conexion = new mysqli("localhost","root", "", "mydb_respaldo")or die("No puedo conectarme");
			$this->id = 20; //ponga aquí el id de cliente
			$this->inmobiliaria = 18;  //ponga aquí aquí el id de inmobiliaria
		}
	}
?>