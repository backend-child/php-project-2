<?php
session_start();
class HomeController
{
    public $model;
    public function indexAction()

    {
        if (isset($_GET['logout'])) {
            unset($_SESSION['userLoginStatus']);
        }


        if (isset($_POST['loginSubmit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $checkUserLogin = $this->model->CheckUserLogin($username, md5($password));

            if ($checkUserLogin == 1) {
                $_SESSION['userLoginStatus'] = 1;
            }
        }

        // Register New Users  

        if (isset($_POST['registerSubmit'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $this->model->UserRegister($username, md5($password));

            $_SESSION['userLoginStatus'] = 1;
        }






        $this->routeManager();
    }

    public function routeManager()
    {
        if (isset($_SESSION['userLoginStatus'])) {
            return require_once('view/dashbord.php');
        }

        if (isset($_GET['register'])) {
            return require_once('view/register.php');
        }

        if (isset($_GET['login']) || isset($_GET['logout'])) {
            return require_once('view/login.php');
        }


        return require_once('view/login.php');
    }
}
