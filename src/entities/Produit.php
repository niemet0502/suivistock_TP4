<?php 
  class Produit
  {
    private $ref;
    private $nom;
    private $qteStock;
    private $id;

    //getters
    public function getId(){
      return $id;
    }
    public function getNom(){
      return $nom;
    }
    public function getQteStock(){
      return $qteStock;
    }
    public function getRef(){
      return $ref;
    }
    //setters
    public function setNom($nom){
      $this->nom = $nom;
    }
    public function setQteStock($qteStock){
      $this->qteStock = $qteStock;
    }
    public function setRef($ref){
      $this->ref = $ref;
    }

    public function setId($id){
      $this->id = $id;
    }
  }
?>