<?php
require_once 'conexion.php';

class Publisher extends Conexion{

  private $conexion;

  public function __CONSTRUCT(){
    $this->conexion = parent::getConexion();
  }

  public function getPublisher(){
    try{
      $consulta = $this->conexion->prepare("CALL spu_mostrar_superhero()");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }



}


?>