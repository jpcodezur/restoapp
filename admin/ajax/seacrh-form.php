<?php

include "../autoload.php";

if(isset($_GET["busqueda"],$_GET["tabla"])){
    
    $sql = "SELECT * FROM ".$_GET["tabla"]."";
    
    $campos = Helper::getInstance()->getCamposTabla($_GET["tabla"]);
    
    if($campos){
    
        $res = Connect::getInstance()->query($sql);
        
    }
}