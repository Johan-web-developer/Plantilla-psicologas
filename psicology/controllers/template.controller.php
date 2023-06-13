<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

class TemplateController{

    public function index(){
        include("vista/template.php");
    }

}
?>