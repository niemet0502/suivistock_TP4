<?php
    include_once "header.php";
?>
<div class="row d-flex align-items-center justify-content-center">
  <!-- Dark table -->
  <div class="row col-md-11">
    <div class="col">
      <div class="card bg-default shadow">
        <div class="card-header bg-transparent border-0">
          <h3 class="text-white mb-0">Liste des Produits</h3>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="sort" data-sort="name">#</th>
                <th scope="col" class="sort" data-sort="budget">Reference</th>
                <th scope="col" class="sort" data-sort="status">Quantite en stock</th>
                <th scope="col">NOM</th>
                <th scope="col" class="sort" data-sort="completion">Actions</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">

            <?php 
              if($data){
                foreach($data as $product){
                  ?>
                    <tr>
                <th scope="row">
                <?= $product->getId() ?>
                </th>
                <td class="budget">
                <?= $product->getRef() ?>
                </td>
                <td>
                <?= $product->getQteStock() ?>
                </td>
                <td>
                <?= $product->getNom() ?>
                </td>
                <td class="text-right">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Supprimer</a>
                      <a class="dropdown-item" href="#">Modifier</a>
                    </div>
                  </div>
                </td>
              </tr>

                  <?php
                }
              }
            ?>  
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
      
<?php 
  include_once "footer.php"
?>