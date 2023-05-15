<?php
require_once 'conexion.php';

class Alignment extends Conexion{

  private $conexion;

  public function __CONSTRUCT(){
    $this->conexion = parent::getConexion();
  }

  public function getAlignment(){
    try{
      $consulta = $this->conexion->prepare("SELECT * FROM alignment");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }



}


?>