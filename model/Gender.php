<?php
require_once 'conexion.php';

class Gender extends Conexion{

  private $conexion;

  public function __CONSTRUCT(){
    $this->conexion = parent::getConexion();
  }

  public function getGender(){
    try{
      $consulta = $this->conexion->prepare("SELECT * FROM gender");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }



}


?>