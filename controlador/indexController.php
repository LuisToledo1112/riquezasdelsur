<?php
require_once('Modelo/indexModel.php');
class IndexController{
private $indexModel;
function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function index(){
    require_once("vista/index.php");
    }
}
?>