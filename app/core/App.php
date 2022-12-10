<?php
   class App{
      
    private $controler="homeController";
    private $method="index";
    private $parameters=[];

    public function __construct(){      
         $this->getUrl();
         $this->render(); 
    }

    public function __destruct(){

    }

    private function getUrl(){

          $url= $_SERVER['REQUEST_URI'];

          if(!empty($url)){

              $url=trim($url,"/");
              $url=explode("/",$url);

              // define a controler
              $this->controler = !empty($url[1]) ? $url[1]."Controller" : "homeController" ;

              // define a method
              $this->method = !empty($url[2]) ? $url[2] : "index" ;

              //  define parameters
              unset($url[0], $url[1], $url[2]);
              $this->parameters = !empty($url) ? array_values($url) : [] ;
          
          }

    }



    private function render(){

        if(class_exists($this->controler)){
          $controler = new $this->controler;

          if(method_exists($this->controler,$this->method)){
              call_user_func_array([$controler,$this->method],$this->parameters);
          }else{
              echo 'this method '.$this->method.' not exist';
          }
        }
        else{
          echo 'this class '.$this->controler.' not exist';
        }

    }
  }
?>