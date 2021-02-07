<?php
  class User
  {
    private $id;
    private $nom;
    private $prenom;
    private $password;
    private $etat;

    //getters
    public function getId(){
      return $id;
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
  }
?>