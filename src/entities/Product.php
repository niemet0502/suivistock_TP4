<?php 
  use Doctrine\ORM\Mapping as ORM;

  /**
   * @ORM\Entity
   * @ORM\Table(name="products")
   */
  class Product
  {
    /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
    private $id;
    /**
   * @ORM\Column(type="string")
   */
    private $ref;
    /**
   * @ORM\Column(type="string")
   */
    private $nom;
     /**
   * @ORM\Column(type="id")
   */
    private $qteStock;

    public function __construct(){
      
    }
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