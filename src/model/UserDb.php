<?php
namespace src\model;
use libs\system\Model;

class UserDb extends Model
{
    public function getUser($login, $mdp)
    {
        return $this->entityManager->createQuery("SELECT u FROM User u WHERE u.login='$login' AND u.password='$mdp'")->getResult();
    }
}
?>