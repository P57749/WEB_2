<?php

class  conexion{
    private $servidor="localhost";
    private $usuario="root";
    private $contrasena="";
    private $conexion;

    public function _construct(){
        try{
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=Productos",$this->usuario,$this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
        }catch(PDOException $e){
            return "falla de conexion".$e;
        }
    }
    public function ejecutar($sql){

        $this->conexion->exec($sql);
        return $this->conexion->lastinsertId();
    }
}
?>