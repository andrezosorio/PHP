<?php
	require_once 'lib\Modelo.php';

	class Usuario extends Modelo{

		function __construct (){
			parent::__construct();
		}

		/*
		metodo que retorna todos los usuarios registrados en la base de datos
		*/
		function getUsuarios(){
			return $this->query("Select * from usuario");
		}

		/*
		metodo que verifica en la base de datos si la persona  que intenta iniciar sesion esta registrada
		*/
		function authenticate($correo, $pass){
			return $this->query("Select * from usuario where correo='$correo' and pass='$pass'");
		}

		/*
		metodo que genera la consulta oara realizar inserciones en la base de datos
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
    	metodo que permite generar la consukta para  eliminar usuarios de la base de datos
    	*/
    	public function delete($nombreTabla, $id){
    		
    		$consulta= "delete from ".$nombreTabla." where id=".$id;
    		print_r($consulta);
    		$this->query($consulta);
    		print_r($this->conexion->errorInfo());



    	}

    	/*
    	metodo que genera la consulta para actualizar los datos de usuarios registrados en la base de datos
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