<?php
include_once "app/models/UserModel.php";

class AuthController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showLogin()
    {
        include_once "app/views/auth/login.php";
    }

    public function login($request)
    {

        $email = $request['email'];
        $password = $request['password'];

        if ($this->userModel->checkLogin($email, $password)) {

            $_SESSION['user'] = $this->userModel->getByEmail($email);

            header("location:index.php?page=user-list");
        } else {
            header("location:index.php?page=login");
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=login");
    }
}