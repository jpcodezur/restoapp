<?php

class Session{
    public static $instance;
    
    private function __construct(){}
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Session();
        }
        
        return self::$instance;
    }
    
    public function getObjSession(){
        if(isset($_SESSION["usuario"])){
            $obj = json_decode($_SESSION["usuario"]);
            return $obj;
        }
        
        return false;
    }
    
}