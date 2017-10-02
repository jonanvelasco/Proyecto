<?php

	/**
	* Clase para conectar a mysql
	*/
	class conexion
	{
        private $host="localhost";
        private $user="root";
        private $password="Akatsuki";
        private $database="la_dino";
        private $obj_conexion;
	
		// Funcion constructura
		function __construct()
		{
	        $this->obj_conexion=new mysqli($this->host, $this->user, $this->password, $this->database);

	        // Si ocurre un error
	        if($this->obj_conexion->connect_errno)
	        {
	            echo"Error de Conexion a la Base de Datos".$this->obj_conexion->connect_error;
	            exit();
	        }
	        else{
			     // echo"Conectados al Servidor y listos para utilizar la Base de Datos: ".$this->database;
	        	return $this->obj_conexion;
	        }
		}

		function ejecutar($sql){
			$this->obj_conexion->query($sql);
		}

		function buscar($sql){
			$result = $this->obj_conexion->query($sql);
			return $result;
		}
	}

	// $conexion = new conexion();

	// Ejemplo insert //
	// $sql = "INSERT INTO tbl_referencias(nom_referencia,id_genero) VALUES ('billeteras',1)";
	// $conexion->ejecutar($sql);

	// Ejemplo select //
	// $sql = "SELECT id_referencia, nom_referencia, id_genero FROM tbl_referencias";
	// $result = $conexion->buscar($sql);
	// echo "<br><br>";
	// while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	// 	echo "-".$row['nom_referencia']."<br>";
	// }

	// Ejemplo update //
	// $sql = "UPDATE tbl_referencias SET nom_referencia='billeteras2' WHERE (id_referencia=8)";
	// $conexion->ejecutar($sql);

	// Ejemplo delete //
	// $sql = "DELETE FROM tbl_referencias WHERE (id_referencia=8)";
	// $conexion->ejecutar($sql);
?>