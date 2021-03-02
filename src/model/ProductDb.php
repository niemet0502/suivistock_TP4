<?php
  namespace src\model;
  use libs\system\Model;
  class ProductDb extends Model{

    public function getProduct()
    {
      return $this->entityManager->createQuery("SELECT p FROM Product p")->getResult();
    }

    public function genererNum()
    {
      $array = $this->entityManager->createQuery("SELECT max(p) FROM Product p")->getResult();
      if($array == NULL){
          $id = 1;
      }else{
          $array[0][1]++;
          $id = $array[0][1];
      }
      $numero = "PR_".date('d').date('m').date('Y')."_".$id;
      return $numero;
    }

    public function addProduct($product)
    {
      $this->entityManager->persist($product);
      $this->entityManager->flush();
      return 1;
    }
  }