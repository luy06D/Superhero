<?php

require_once 'conexion.php';

class SuperHeroe extends Conexion{

  private $conexion;

  public function __CONSTRUCT(){
    $this->conexion = parent::getConexion();
  }


  public function listarSuperHeroes($publisher_id){
    try{
      $consulta = $this->conexion->prepare("CALL spu_superhero_list(?)");
      $consulta->execute(array($publisher_id));
      return $consulta->fetchAll(PDO::FETCH_ASSOC);

    }
    catch(Exception $e){
      die($e->getMessage());

    }
  }
}

?>