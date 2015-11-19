<?php
	class Controlador{

		protected $parametros;

		/*
		metodo que carga los controladores en la pagina
		*/
		protected function cargarModelo($nombreModelo){
			$nombreModelo = ucfirst(strtolower($nombreModelo));

			$ruta="modelos/$nombreModelo.php";
			
			if(file_exists($ruta))
			{
				include_once $ruta;
				$modelo = new $nombreModelo();
				return $modelo;
			}
			else
				return null;
		}

		/*
		metodo que carga las vistas de la pagina
		*/
		protected function cargarVista($nombreVista, $parametros=array()){


			$nombreVista = ucfirst(strtolower($nombreVista));

			$ruta="vistas/$nombreVista.php";
			
			if(file_exists($ruta))
			{
				require_once $ruta;
				return true;
			}
			else
				return false;
		

		}

		public function setParametros($params) {
	        $this->parametros = $params;
	    }

	    public function getParametros() {
	        return $this->parametros;
	    }
	}
?>