<?php

require_once '../model/SuperHeroe.php';

if(isset($_POST['operacion'])){

  $superheroe = new SuperHeroe();

  if($_POST['operacion'] == 'listar'){
    $datos = $superheroe->listarSuperHeroes($_POST['publisher_id']);
    if($datos){
      echo json_encode($datos);
    }
  }
}