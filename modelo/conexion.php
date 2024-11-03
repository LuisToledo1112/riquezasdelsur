<?php
class Conexion extends PDO{
    private $hostBD='sql303.infinityfree.com';
    private $nombreBD='if0_37549497_riquezasdelsur';
    private $usuarioBD='if0_37549497';
    private $passwordBD='u7Knb6YuLzVh';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        }
    }
}
?>