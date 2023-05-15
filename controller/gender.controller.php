<?php

require_once '../model/Gender.php';

if(isset($_POST['operacion'])){

  $gender = new Gender();

  if($_POST['operacion'] == 'getGender'){
    echo json_encode($gender->getGender());

  }

}

?>