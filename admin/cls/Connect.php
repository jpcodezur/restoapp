<?php

class Connect extends mysqli{
    
    public static $instance;
    
    private static $host = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $database = "restoapp";
    
    private function __construct(){}
    
    public static function getInstance(){
        if(!self::$instance){
            $obj = new mysqli(self::$host, self::$user, self::$password, self::$database);
            $obj->current_database = self::getDatabase($obj);
            self::$instance = $obj;
        }
        
        return self::$instance;
    }
    
    public static function getDatabase($mysqli){
        if ($result = $mysqli->query("SELECT DATABASE()")) {
            $row = $result->fetch_row();
            $result->close();
            return $row[0];
        }
    }
    
}