<?php
	require_once 'lib\Modelo.php';

	class Puja extends Modelo{

		function __construct (){
			parent::__construct();
		}

		/*
		metodo que retorna todas las pujas registradas en la base de datos
		*/
		function getPujas(){
			return $this->query("Select * from puja");
		}

		/*
		function authenticate($correo, $pass){
			return $this->query("Select * from puja where correo='$correo' and pass='$pass'");
		}*/

		/*
		metodo que permite crear la consulta para realizar inserciones en la bd
		*/
		public function insert($nombreTabla,$valores){
	        $consulta  = "";

	        $coma = "";
	        foreach ($valores as $key => $value) {
	            $consulta = $consulta." ".$coma.$key."=".$value;
	            $coma=",";
	        }
	        //insert into usuario set id="05",nombre="daniel" 
	        $consulta= "insert into ".$nombreTabla." SET ".$consulta;
	        print_r($consulta);
	        $this->query($consulta);
	        print_r($this->conexion->errorInfo());
    	}	


    	/*
    	metodo que permite crear la consulta para eliminar elementos de la bd
    	*/
    	public function delete($nombreTabla, $id){
    		
    		$consulta= "delete from ".$nombreTabla." where id=".$id;
    		print_r($consulta);
    		$this->query($consulta);
    		print_r($this->conexion->errorInfo());



    	}


		/*
		metodo que permite crear la consulta para actualizar elementos en la bd
		*/
    	public function update($nombreTabla,$valores,$id){
	        $consulta  = "";

	        $coma = "";
	        foreach ($valores as $key => $value) {
	            $consulta = $consulta." ".$coma.$key."=".$value;
	            $coma=",";
	        }
	        //insert into usuario set id="05",nombre="daniel" 
	        $consulta= "update ".$nombreTabla." SET ".$consulta." where id=".$id;
	        print_r($consulta);
	        $this->query($consulta);
	        print_r($this->conexion->errorInfo());
    	}	

	}
?>