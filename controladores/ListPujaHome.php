<?php

require_once 'lib/Controlador.php';
class ListPujaHome extends Controlador{

     

    /*
    metodo que carga la vista registrar puja
    */
    public function mostrarRegistroPuja(){
        $this->cargarVista("registroPuja");    
    }

    /*
    metodo que carga la vista perfil de usuario
    */
    public function mostrarPerfil(){
        $this->cargarVista("perfil");    
    }

    /*
    metodo que carga la vista listado de pujas
    */
    public function mostrarInicio(){
        $this->cargarVista("listadoPuja");    
    }   

    /*
    metodo que carga la vista descripcion de la puja
    */
    public function mostrarPuja(){
        $this->cargarVista("puja");
    }

    /*
    metodo que carga la vista inicio
    */
    public function mostrarSalir(){
        $this->cargarVista("index");
    }

    public function imprimir() {
        print_r($this->parametros);
    }
    /*
    public function index(){
    	$usuario = $this->cargarModelo("Usuario");
    	$result = $usuario->getUsuarios();

    	foreach ($result as $row) {
    		print_r ($row);
    	}
        print_r($this->parametros);
    }*/



    }
?>