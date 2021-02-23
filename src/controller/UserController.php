<?php

    use libs\system\Controller;
    use src\model\UserDb;
    //session_start();
    class UserController extends Controller
    {
        public function authentification()
        {
            if(isset($_POST['vefUser']))
            {
                extract($_POST);
                $udb = new UserDb();
                $user = $udb->getUser($login, $mdp);
                if($user != null)
                {
                    $_SESSION['user'] = $user[0]->getNom()." ".$user[0]->getPnom();
                    $this->view->load("acceuil/acceuil");
                }else{
                    $error = "LOGIN OU MOT DE PASSE INCORRECT !!!";
                    return $this->view->load("connexion/authentification",$error);
                }
            }else{
                return $this->view->load("connexion/authentification");
            }
        }

        public function disconnect(){
            $_SESSION['user'] = array();
            session_unset();
            header('location:/suivistock/');
        }

    }
?>