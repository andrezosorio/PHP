<?php

class FrontController {

    private $controlador="home";
    private $metodo="index";
    private $params;

    
    
    public function index() {
        $url = $_SERVER["REQUEST_URI"];
        $path = trim(parse_url($url, PHP_URL_PATH), "/");
        try {
            @list($nombreAplicacion, $ctrl, $mtdo, $prms) = explode("/", $path, 4);
            @$prms = explode("/", $prms);

            if ($ctrl !== null) {
                $this->setControlador($ctrl);
            }
            if ($mtdo !== null) {
                $this->setMetodo($mtdo);
            }
            if ($prms !== null) {
                $this->setParams($prms);
            }
            
            $controller = $this->cargarControlador($this->controlador);
            $controller->setParametros($this->params);
            $stringMetodo = $this->metodo;
            if(method_exists($controller, $stringMetodo)){
                 $controller->$stringMetodo();
            } else {
                print_r("EL método no existe.");  
            }            
        } catch (Exception $ex) {
            $ex->getMessage();
        }
        
    }

    /*
     * Métodos Set de los atributos de la aplicación
     */

    public function setControlador($ctrl) {
        $this->controlador = $ctrl;
    }

    public function setMetodo($mtdo) {
        $this->metodo = $mtdo;
    }

    public function setParams($prms) {
        $this->params = $prms;
    }

    /*
     * Métodos Get de los atributos de la aplicación
     */

    public function getControlador() {
        return $this->controlador;
    }

    public function getMetodo() {
        return $this->metodo;
    }

    public function getParams() {
        return $this->params;
    }
    
    /*
     * Método que sirve para cargar un controlador deseado
     * en caso de que este exista
     */
    public function cargarControlador($ctrl) {
        //Se pone la letra inicial en mayúscula
        $ctrl = ucfirst(strtolower($ctrl));
        //Se crea la url donde se buscará el controlador
        $urlFile = 'controladores/' . $ctrl . '.php';
        //Se verifica si el archivo exite
        if(file_exists($urlFile)) {
            include $urlFile;
            //El nombre del archivo debe ser el mismo
            //que el de la clase
            $class = $ctrl;
            $controller = new $class();
            return $controller;
        } else {
            return null;
        }
    }

}

$frontController = new FrontController();
$frontController->index();