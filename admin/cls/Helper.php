<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Helper {

    private function __construct() {
        
    }

    public static $instance;

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Helper();
        }

        return self::$instance;
    }

    public function getCamposTabla($tabla) {
        $sql = "SELECT `COLUMN_NAME` 
                FROM `INFORMATION_SCHEMA`.`COLUMNS` 
                WHERE `TABLE_SCHEMA`='" . Connect::getInstance()->current_database . "' 
                AND `TABLE_NAME`='" . $tabla . "';";

        $campos = array();

        $res = Connect::getInstance()->query($sql);

        if ($res) {
            $salida = '<tr>';
            $std = new stdClass();
            while ($row = $res->fetch_object()) {
                foreach ($row as $key => $value) {
                    $campos[] = $value;
                }
            }
        }

        return $campos;
    }

    public function getCabezalTabla($tabla,$parametros=array()) {

        $campos = $this->getCamposTabla($tabla);

        $salida = ' <th>
                        <div role="alert" class="alert alert-danger">
                            <strong>Error!</strong> No se pudo traer cabezal tabla
                        </div>
                    </th>';

        if ($campos) {
            $salida = '<tr>';
            $salida .= '<th class="checkboxes-tabla"><input type="checkbox" id="chk-'.$tabla.'-all"></th>';
            $std = new stdClass();
            foreach ($campos as $campo) {
                if ($campo != "clave") {
                    if (Session::getInstance()->getObjSession()->tipo != "admin") {
                        if (strpos($campo, "campo_permiso_") === false) {
                            $salida .= '<th>' . $campo . '</th>';
                        }
                    } else {
                        if (strpos($campo, "campo_permiso_") !== false) {
                            $value = substr($campo, 14);
                            $salida .= '<th>' . $campo . '</th>';
                        }
                    }
                }
            }
            $salida .= '<th class="acciones-tabla"></th>';
            $salida .= '</tr>';
        }

        return $salida;
    }

    public function getCuerpoTabla($tabla,$parametros=array()) {

        $sql = "SELECT * FROM $tabla";

        $res = Connect::getInstance()->query($sql);

        $salida = ' <td>
                        <div role="alert" class="alert alert-danger">
                            <strong>Error!</strong> No se pudo traer cabezal tabla
                        </div>
                    </td>';

        if ($res) {
            $salida = '';
            $std = new stdClass();
            $count = 0;
            while ($row = $res->fetch_object()) {
                if( $count < $parametros["paginado"]){
                $salida .= '<tr>';
                $objSesion = Session::getInstance()->getObjSession();
                $salida .= '<th class="checkboxes-tabla"><input type="checkbox" id="chk-'.$tabla.'-'.$count.'"></th>';
                foreach ($row as $key => $value) {
                    
                    if ($key != "clave") {
                        if (Session::getInstance()->getObjSession()->tipo != "admin") {
                            if (strpos($key, "campo_permiso_") === false) {
                                $salida .= '<td>' . $value . '</td>';
                            }
                        } else {
                            if (strpos($key, "campo_permiso_") !== false) {
                                $value = substr($value, 14);
                                $salida .= '<td>' . $value . '</td>';
                            }
                        }
                    }
                    
                }
                $salida .= '<td class="acciones-tabla">'
                        .       '<a href="#">'
                        .           '<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>'
                        .       '</a>'
                        .   '<span>&nbsp;</span>'
                        .       '<a href="#">'
                        .           '<i class="glyphicon glyphicon-edit" aria-hidden="true"></i>'
                        .       '</a>'
                        .   '</td>';
                $salida .= '</tr>';
                $count++;
            }
            }
        }

        return $salida;
    }

    public function setParametros(){
        if (!isset($parametros["paginado"])) {
            $parametros["paginado"] = 10;
        }
        if(!isset($parametros["pagina"])){
            $parametros["pagina"] = 1;
        }
        
        return $parametros;
    }
    
    public function renderTable($tabla, $post, $parametros = array()) {

        $sql = "SELECT * FROM $tabla";

        $res = Connect::getInstance()->query($sql);

        $salida = ' <div role="alert" class="alert alert-danger">
                        <strong>Error!</strong> No se pudo traer la tabla
                    </div>';
        
        $parametros = $this->setParametros($parametros);

        if ($res) {


            $salida = '<form id="fomr-search-bar" class="navbar-form navbar-left" role="search">';
            $salida .= '<div class="form-group">';

            $salida .= '<i class="glyphicon glyphicon-search"></i><input id="search-form" type="text" class="form-control" placeholder="Search">';

            $salida .= '</div>';
            $salida .= '</form>';
            $salida .= '<table class="table table-bordered table-hover">';
            $salida .= '<thead>';
            $salida .= $this->getCabezalTabla($tabla,$parametros);
            $salida .= '</thead>';
            $salida .= '<tbody>';
            $salida .= $this->getCuerpoTabla($tabla,$parametros);
            $salida .= '</tbody>';
            $salida .= '</table>';
        }

        echo $salida;

        $this->pagination($tabla, $parametros);
    }
    
    public function setUrl(){
         $salida = "";
        $s = explode("/", $_SERVER["PHP_SELF"]);
        $salida = $s[count($s)-1];
        
        return $salida;
    }
    
    public function pagination($tabla, $parametros = array()) {

        $sql = "SELECT count(*) as total_registros"
                . " FROM $tabla";
                //. " LIMIT ".$parametros["pagina"].", ".$parametros["paginado"];

        $res = Connect::getInstance()->query($sql);

        $salida = ' <div role="alert" class="alert alert-danger">
                        <strong>Error!</strong> No se pudo traer el paginado
                    </div>';
        
        if ($row = $res->fetch_object()) {
            $total_paginas = ceil($row->total_registros / $parametros["paginado"]);
            $salida = '<ul class="pagination">';
            $salida .= '<li>'
                    . '<a href="#">'
                    . '<span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span>'
                    . '</a>'
                    . '</li>';
            
            for ($i = 1;$i<=$total_paginas;$i++) {
                $salida .= '<li>'
                        . '<a href="'.$this->setUrl().'&pagina='.$i.'">'.$i .'</a>'
                        . '</li>';
            }
            
            $salida .= '<li>'
                    . '<a href="#">'
                    . '<span aria-hidden="true">&raquo;</span>'
                    . '<span class="sr-only">Next</span>'
                    . '</a>'
                    . '</li>';
            $salida .= '</ul>';
        }



        echo $salida;
    }

}
