<?php
    include_once "header.php";
?>

<div class="col-md-10 offset-1 mt-5">
<table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reference</th>
      <th scope="col">Nom</th>
      <th scope="col">Quantite en stock</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if($data){
        foreach($data as $product){
          
          ?>
            <tr>
              <th scope="row"><?= $product->getId() ?></th>
              <td><?= $product->getRef() ?></td>
              <td><?= $product->getNom() ?></td>
              <td> <?= $product->getQteStock() ?> </td>
              <td>
                <button class="btn btn-warning">MODIFIER</button>
                <button class="btn btn-danger">SUPPRIMER</button>
              </td>
            </tr>
          <?php
        }
      }
    ?>
  </tbody>
</table>
</div>