<?php
    //namespace src\controller;
    //session_start();
    use libs\system\Controller;
    use src\model\UserDb;
    class AcceuilController extends Controller
    {
        public function acceuil()
        {
            return $this->view->load("acceuil/acceuil");
        }
    }
?>