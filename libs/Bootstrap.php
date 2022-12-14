<?php

class Bootstrap
{
	public $_url;
	public $_controllerPath = 'app/controllers/';
	public $_controllerName =  'boots';
	public $_methodName = 'boots';
	public $_controller;

	public function __construct()
	{
		$this->getUrl();
        $this->loadController();        
        $this->callMethod();
	}

	public function getUrl(){
        $this->_url = isset($_GET["url"]) ? $_GET["url"] : null;
        if($this->_url != null){
            $this->_url = rtrim($this->_url, "/");
            $this->_url = explode("/", $this->_url);
        }else{
           unset($this->_url); 
        }
    }
    
    /**
     * Controller dosyasını ve Controller'ı yükler.
     * $_url[0] set edilmişse $_controllerName'e atar ve $_controllerName'i 
     * yükler.
     * $_url[0] set edilmemişse $_controllerName'in default değerini yükler.
     */
    public function loadController(){
        if(!isset($this->_url[0])){
            include  $this->_controllerPath . $this->_controllerName . '.php';
            $this->_controller = new $this->_controllerName();
        }else{
            $this->_controllerName = $this->_url[0];
            $fileName = $this->_controllerPath . $this->_controllerName . ".php";
            if(file_exists($fileName)){
                include $fileName;
                if(class_exists($this->_controllerName)){
                    $this->_controller = new $this->_controllerName();
                }else{
                    header("Location: ". SITE_URL ." ");
                }
            }else{
                header("Location: ". SITE_URL ." ");
            }
        }
    }
    
    /**
     * Methodu parametreli ya da parametresiz yükler.
     * $_url[1] set edilmişse $_methodName'e atar ve $_methodName'i 
     * yükler.
     * $_url[1] set edilmemişse $_methodName'in default değerini yükler.
     */
    public function callMethod(){
         if(isset($this->_url[2])){
            $this->_methodName = $this->_url[1];
            if(method_exists($this->_controller, $this->_methodName)){
                $this->_controller->{$this->_methodName}($this->_url[2]);
            }else{
                header("Location: ". SITE_URL ." ");
            }
        }else{
            if(isset($this->_url[1])){
                $this->_methodName = $this->_url[1];
                if(method_exists($this->_controller, $this->_methodName)){
                    $this->_controller->{$this->_methodName}();
                }else{
                    header("Location: ". SITE_URL ." ");
                }
            }else{
                if(method_exists($this->_controller, $this->_methodName)){
                    $this->_controller->{$this->_methodName}();
                }else{
                    header("Location: ". SITE_URL ." ");
                }
            }
        }
    }
}
