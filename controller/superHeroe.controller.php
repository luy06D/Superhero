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

  
  if($_POST['operacion'] == 'listarFiltrado'){
    $datos = $superheroe->listarFiltrado(
      $_POST['race_id'],
      $_POST['gender_id'],
      $_POST['bando_id'],);
    if($datos){
      echo json_encode($datos);
    }
  }

  if($_POST['operacion'] == 'resumenBandos'){
    $datos = $superheroe->getBandoResume();
    echo json_encode($datos);
  }



 

}