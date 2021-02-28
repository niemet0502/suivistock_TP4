<?php

namespace libs\system;

class Model
{
    protected $entityManager;

    public function __construct()
    {
        require_once "bootstrap.php";
        //global $entityManager;
        $this->entityManager = $entityManager;
    }
    
}
