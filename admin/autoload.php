<?php

session_start();

function __autoload($class){
    if(is_file("$class.php")){
        include "$class.php";
    }elseif(is_file("cls/$class.php")){
        include "cls/$class.php";
    }elseif(is_file("../cls/$class.php")){
        include "../cls/$class.php";
    }
}