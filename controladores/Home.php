<?php

require_once 'lib/Controlador.php';
class Home extends Controlador{

     /*
     metodo que carga la vista del inicio
     */
    public function index(){
        $this->cargarVista("index");
    }

    /*
    metodo que carga la vista del listado de pujas
    */
    public function listadoPuja(){
        $this->cargarVista("listadoPuja");
    }

    /*
    metodo que carga la vista de la descripcion de la puja
    */
    public function puja(){        
        $this->cargarVista("puja");
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
    metodo que verifica las credenciales del usuario y si son correctas inicia sesion
    */
    public function login(){
        $pass= $_POST["pass"];
        $correo= $_POST["correo"];

        $modelo= $this->cargarModelo("Usuario");
        $respuesta= $modelo->authenticate($correo, $pass);
        if($respuesta != null && $respuesta->rowCount()>0)
        {
            setcookie("chsm","logedin", time()+3600,"/","localhost");
            header("Location: /Final/home/listadoPuja");
            exit;
        }
        else{       
            
            $this-> cargarVista("index", array("login"=>false));
        }
    }

    /*
    metodo que finaliza la sesion del usuario finalizando la cookie
    */
    public function logout(){
        setcookie("chsm","",time()-3600,"/","localhost");
        header("Location: /Final");

    }

    /*
    metodo que permite registrar un usuario en la base de datos
    */
    public function insert(){
        $usuario = $this->cargarModelo("Usuario");

        $imagen=   "333";
        $nombre=   $_POST['nombre'];
        $correo=   $_POST['correo'];        
        $pass=     $_POST['pass'];
        $pass2=    $_POST['pass2'];
        $pais=     "Colombia";
        $estado=   "Quindio";
        $direccion=$_POST['direccion'];
        $telefono= $_POST['telefono'];
        $pujas=    "10";
        $mensaje= "";

        if($pass==$pass2 && $pass!=""){
            if($nombre!=""){
                if($correo!=""){
                    if($pais!=""){
                        if($estado!=""){
                            if($direccion!=""){
                                if($telefono!=""){

                                    $nombreTabla="usuario";
                                    $valores= array("imagen"=>"'".$imagen."'","nombre"=>"'".$nombre."'","correo"=>"'".$correo."'","pais"=>"'".$pais."'","estado"=>"'".$estado."'","direccion"=>"'".$direccion."'","telefono"=>"'".$telefono."'","pujas"=>"'".$pujas."'","pass"=>"'".$pass."'");
                                    
                                    $result = $usuario->insert($nombreTabla,$valores);
                                    header("Location: /Final/home/listadoPuja");
                                }
                                else{$mensaje="El telefono no puede ser un campo vacio";}
                            }
                            else{$mensaje= "La direccion no puede ser un campo vacio";}
                        }
                        else{$mensaje= "El estado no puede ser un campo vacio";}
                    }
                    else{$mensaje= "El pais no puede ser un campo vacio";}
                }
                else{$mensaje= "El correo no puede ser un campo vacio";}
            }
            else{$mensaje= "El nombre no puede ser un campo vacio";}
        }
        else{$mensaje= "Los campos de contraselas deben ser iguales";}



        echo <<<EOT
        <script>
            alert('$mensaje');
        </script>
EOT;
       
        

           
    }

    /*
    metodo que elimina un usuario de la base de datos
    */
    public function delete(){
        $usuario =$this ->cargarModelo("Usuario");

        $nombreTabla="usuario";
        $id="10";
        $result= $usuario->delete($nombreTabla,$id);
    }

    /*
    metodo que actualiza los datos de un usuario en la base de datos
    */
    public function update (){
        $usuario = $this->cargarModelo("Usuario");

        $nombreTabla="usuario";
        $id="20";
        $valores= array("id"=>"'20'","nombre"=>"'pepe'","apellido"=>"' texto'");

        $result=$usuario->update($nombreTabla,$valores,$id);


    }

    }
?>