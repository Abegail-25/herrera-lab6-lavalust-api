<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('AuthModel');
    }

    public function index()
    {
        $this->call->view('login');
    }

    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->AuthModel->find_by('username', $username);

        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['user'] = $user['username'];

            redirect('products');

        } else {

            echo "Invalid username or password.";

        }
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        unset($_SESSION['user']);

        redirect('login');
    }
}