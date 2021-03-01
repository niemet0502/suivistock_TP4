<?php
  namespace src\model;
  use libs\system\Model;
  
  class ProductDb extends Model{
    public function getProduct()
    {
        return $this->entityManager->createQuery("SELECT p FROM Product p")->getResult();
    }
  }