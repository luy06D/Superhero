<h1 class="text-center text-md"><?=$title?> - <?=$title2?> - <?=$title3?></h1>

<table class="table table-border mt-5">
  <colgroup>
    <col style='width: 5%'>
    <col style='width: 30%'>
    <col style='width: 30%'>
    <col style='width: 30%'>
    <col style='width: 5%'>

  </colgroup>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Color de Cabello</th>
      <th>Editor</th>
      <th>Peso</th>
    </tr>

  </thead>
  <tbody>

  <?php foreach($data as $registro): ?>
    <tr>
      
      <td><?=$registro['id']?></td>
      <td><?=$registro['superhero_name']?></td>
      <td><?=$registro['hair_colour']?></td>
      <td><?=$registro['publisher_name']?></td>
      <td><?=$registro['weight_kg']?></td>
      
    </tr>
  
  <?php endforeach;?>

  </tbody>
</table>