<?php

require_once '../model/Alignment.php';

if(isset($_POST['operacion'])){

  $alignment = new Alignment();

  if($_POST['operacion'] == 'getAlignment'){
    echo json_encode($alignment->getAlignment());

  }

}

?>