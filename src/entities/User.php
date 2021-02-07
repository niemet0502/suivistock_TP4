<?php
  class User
  {
    private $id;
    private $nom;
    private $prenom;
    private $password;
    private $etat;

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
  }
?>