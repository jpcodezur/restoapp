<?php

class Login{

    private function __construct(){}
    
    public static $instance;
    
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new Login();
        }
        
        return self::$instance;
    }
    
    
    public function login($post){
        if(isset($post["inputUusario"],$post["inputPassword"])){
            $user = $post["inputUusario"];
            $pass = $post["inputPassword"];
            $sql = "SELECT * FROM usuarios WHERE nombre = '".$user."' AND clave = '".  md5($pass)."'";
            $res = Connect::getInstance()->query($sql);
            if($res){
                $std = new stdClass();
                while($row = $res->fetch_object()){
                    foreach($row as $key => $value){
                        if($key != "clave"){
                            $std->$key = $value;
                        }
                    }
                }
                if(isset($_SESSION)){
                    $_SESSION["usuario"] = json_encode($std);
                    header("Location: index.php");
                    die();
                }
            }
        }
        return false;
    }
    
    public function isLogin(){
        if(!isset($_SESSION["usuario"])){
            header("Location: ingresar.php");
            die();
        }
    }
}
