<?php

    /*class Conexion
    {
        protected $conexion;
        protected $id;
        protected $inmobiliaria;
        function __construct()
        {
            //echo basename("../clientes");
            $str = __FILE__;
            $id = substr($str, strpos($str, "clientes\\")+9, strpos($str, "\clases")-25);
            $idnum = (int)$id;
            $this->conexion = new mysqli("db539063414.db.1and1.com","dbo539063414", "Palabra!1", "db539063414")or die("No puedo conectarme");
            //$this->conexion = new mysqli("localhost","root", "", "mydb_respaldo")or die("No puedo conectarme");
            $this->id = $idnum;
            $inmo = $this->conexion->query("SELECT idinmobiliaria FROM tblinmobiliaria WHERE idcliente = '$this->id'")or die("No puedo asignar la inmobiliaria");
            $arrayInmo = $inmo->fetch_array(MYSQL_ASSOC);
            $this->inmobiliaria = $arrayInmo[idinmobiliaria]; //ponga aquí aquí el id de inmobiliaria
        }
    }*/
 

	class Conexion
	{
		protected $conexion;
		protected $id;
		protected $inmobiliaria;
		function __construct()
		{
			//$this->conexion = new mysqli("db539063414.db.1and1.com","dbo539063414", "Palabra!1", "db539063414")or die("No puedo conectarme");
			$this->conexion = new mysqli("localhost","root", "", "mydb2")or die("No puedo conectarme");
			$this->id = 27; //ponga aquí el id de cliente
			$this->inmobiliaria = 23;  //ponga aquí aquí el id de inmobiliaria
		}
	}
?>