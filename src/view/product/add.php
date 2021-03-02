<?php
    include_once "header.php";
?>
<div class="col-xl-12 order-xl-1 mt-2">
    <div class="card">
    <form  method="post" action="/suivistock/Product/addProduct">
      <div class="card-header">
        <div class="row align-items-center">
          <div class="col-8">
            <h3 class="mb-0">Ajout Nouveau produit </h3>
          </div>
          
          <div class="col-4 text-right">
            <button type="submit" name="AjoutProduit"  class="btn btn-sm btn-primary">
              Enregistrer
            </button>
          </div>
        </div>
      </div>
      <div class="card-body">
        
          <h6 class="heading-small text-muted mb-4">Product information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">Id</label>
                  <input type="text" id="input-username" class="form-control" readonly  placeholder="" value="<?= substr($data[1], -1)?>" >
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Reference</label>
                  <input type="text" name="ref" id="input-email" class="form-control" readonly value="<?= $data[1] ?>" placeholder="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-first-name">Nom</label>
                  <input type="text" name="nom" id="input-first-name" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-last-name">Quantite en stock</label>
                  <input type="number" name="stock" id="input-last-name" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php 
  include_once "footer.php"
?>