<?php

namespace app\controllers;

use app\models\User;
use app\models\Cliente;
use app\models\Estabelecimento;
use app\models\Administrador;
use app\models\DonoEstabelecimento;


class AuthController
{
    public function loginForm()
    {
        $content = "auth/login";
        require_once __DIR__ . '/../views/layout/main.php';
    }

    public function cadastrarForm()
    {
        $content = "auth/cadastrar";
        require_once __DIR__ . '/../views/layout/main.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Authenticate user
        $user = User::authenticate($email, $password);

        if ($user) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_type'] = $user->type;

            //Redirecionamento
            switch ($user->type) {
                case 'cliente':
                    $content = "cliente/index";
                    require_once __DIR__ . '/../views/layout/main.php';
                    header('Location: /kino/cliente');
                    break;
                case 'estabelecimento':
                    header('Location: /estabelecimento');
                    break;
                case 'administrador':
                    header('Location: /admin');
                    break;
                case 'dono_estabelecimento':
                    header('Location: /dono-estabelecimento');
                    break;
            }
        } else {
            $_SESSION['error'] = 'Login failed';
            header('Location: /kino/logarform');
        }
    }

    public function cadastrar()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $type = $_POST['type'];

        // Create user
        $user = new User($name, $email, $password, $type);
        if ($user->save()) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_type'] = $user->type;

            // Redirect based on user type
            switch ($user->type) {
                case 'cliente':
                    header('Location: /cliente');
                    break;
                case 'estabelecimento':
                    header('Location: /estabelecimento');
                    break;
                case 'administrador':
                    header('Location: /admin');
                    break;
                case 'dono_estabelecimento':
                    header('Location: /dono-estabelecimento');
                    break;
            }
        } else {
            $_SESSION['error'] = 'Registration failed';
            header('Location: /cadastrar');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /login');
    }

    public function authenticate()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit();
        }

        $userType = $_SESSION['user_type'];
        $currentPath = $_SERVER['REQUEST_URI'];

        $allowedPaths = [
            'cliente' => ['/cliente', '/cliente/*'],
            'estabelecimento' => ['/estabelecimento', '/estabelecimento/*'],
            'administrador' => ['/admin', '/admin/*'],
            'dono_estabelecimento' => ['/dono-estabelecimento', '/dono-estabelecimento/*']
        ];

        foreach ($allowedPaths[$userType] as $path) {
            if (fnmatch($path, $currentPath)) {
                return true;
            }
        }

        header('Location: /login');
        exit();
    }
}
