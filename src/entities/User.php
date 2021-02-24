<?php
  use Doctrine\ORM\Mapping as ORM;

  /**
   * @ORM\Entity
   * @ORM\Table(name="users")
   */
  class User
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
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    /**
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @ORM\Column(type="integer")
     */
    private $etat;

     /**
     * @ORM\Column(type="string")
     */
    private $login;

    public function __construct(){
      
    }
    //getters
    public function getId(){
      return $this->$id;
    }

    public function getPrenom(){
      return $prenom;
    }
    public function getPassword(){
      return $password;
    }
    public function getEtat(){
      return $etat;
    }

    public function getLogin(){
      return $login;
    }

    //setters
    public function setId($id){
      $this->id = $id;
    }

    public function setNom($nom){
      $this->nom = $nom; 
    }

    public function setPrenom($prenom){
      $this->prenom = $prenom;
    }

    public function setPassword($password){
      $this->password = $password;
    }

    public function setEtat($etat){
      $this->etat = $etat;
    }
    public function setLogin($login){
      $this->login = $login;
    }
  }
?>