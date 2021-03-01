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
}