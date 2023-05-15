<?php

require_once '../model/Publisher.php';

if(isset($_POST['operacion'])){

  $superhero = new Publisher();

  if($_POST['operacion'] == 'getPublisher'){
    echo json_encode($superhero->getPublisher());

    // $datos = $superhero->getSuperhero();

    // if($datos){
    //   echo json_encode($datos);
    // }

  }

}

?>