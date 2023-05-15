<?php

require_once '../model/Race.php';

if(isset($_POST['operacion'])){

  $race = new Race();

  if($_POST['operacion'] == 'getRace'){
    echo json_encode($race->getRace());

  }

}

?>