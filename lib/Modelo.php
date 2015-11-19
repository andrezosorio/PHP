<?php

class Modelo extends Controlador{

	protected $host= "localhost";
	protected $db_name= "Final";
	protected $username = "root";
    protected $password = "12345";
    protected $conexion;

    /*
    metodo que permite realizar la conexion con la base de datos
    */
	function __construct(){
		try{
			$this->conexion = new PDO("mysql:host={$this->host};dbname={$this->db_name}",$this->username, $this->password);
		}
		catch(PDOException $exception){
			echo "Connection error: ".$exception->getMessage();
		}
	}

	protected function query($query){
		return $this->conexion->query($query);
	}

	
}

?>