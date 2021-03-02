<?php
  use libs\system\Controller;
  use src\model\ProductDb;

class ProductController extends Controller{
  public function getList()
  {
      $cdb = new ProductDb();
      $products = $cdb->getProduct();
      return $this->view->load("product/liste",$products);
  }

  public function add()
  {
      $cdb = new ProductDb();
      $numero = $cdb->genererNum();
      $array = array("",$numero);
      return $this->view->load("product/add",$array);
  }

  public function addProduct()
  {
      if(isset($_POST['AjoutProduit']))
      {
        extract($_POST);
        $cdb = new ProductDb();
        $product = new Product();

        $product->setRef($ref);
        $product->setNom($nom);
        $product->setQteStock($stock);
        $cdb->addProduct($product);
        $products = $cdb->getProduct();
        return $this->view->load("product/liste",$products);
      }
  }
}