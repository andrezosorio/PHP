<?php

require_once 'lib/Controlador.php';
class PujaHome extends Controlador{

     /*
    metodo que carga la vista registrar puja
    */
    public function registroPuja(){
        $this->cargarVista("registroPuja");
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

    /*
    metodo que carga la vista registrar puja
    y registra una puja en la bd
    */
    public function insert(){
        $puja = $this->cargarModelo("Puja");

        

        $id_usuario=   
        $imagen=      "333";
        $nombre=       $_POST['nombre'];
        $descripcion=  $_POST['descripcion'];        
        $precio=       $_POST['precio'];
        $tiempo=       $_POST['tiempo'];
        $dentrega=     $_POST['dentrega'];
    
            $nombreTabla="puja";
            $valores= array("imagen"=>"'".$imagen."'","nombre"=>"'".$nombre."'","descripcion"=>"'".$descripcion."'","precio"=>"'".$precio."'","tiempo"=>"'".$tiempo."'","dentrega"=>"'".$dentrega."'");
            
            $result = $puja->insert($nombreTabla,$valores);
            header("Location: /Final/ListPujaHome/mostrarRegistroPuja");  
    }

    public function delete(){
        $usuario =$this ->cargarModelo("Usuario");

        $nombreTabla="usuario";
        $id="10";
        $result= $usuario->delete($nombreTabla,$id);
    }

    public function update (){
        $usuario = $this->cargarModelo("Usuario");

        $nombreTabla="usuario";
        $id="20";
        $valores= array("id"=>"'20'","nombre"=>"'pepe'","apellido"=>"' texto'");

        $result=$usuario->update($nombreTabla,$valores,$id);


    }

    }
?>