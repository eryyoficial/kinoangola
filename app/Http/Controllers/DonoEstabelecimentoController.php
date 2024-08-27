<?php

namespace app\controllers;

use app\models\DonoEstabelecimento;
use app\models\Estabelecimento;

class DonoEstabelecimentoController
{
    public function dashboard()
    {
        require_once __DIR__ . '/../views/dono_estabelecimento/dashboard.php';
    }

    public function loginForm()
    {
        require_once __DIR__ . '/../views/dono_estabelecimento/login.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $dono = DonoEstabelecimento::authenticate($email, $password);

        if ($dono) {
            $_SESSION['user_id'] = $dono->id;
            $_SESSION['user_type'] = 'dono_estabelecimento';
            header('Location: /dono-estabelecimento');
        } else {
            $_SESSION['error'] = 'Login failed';
            header('Location: /dono-estabelecimento/login');
        }
    }

    public function cadastrarForm()
    {
        require_once __DIR__ . '/../views/dono_estabelecimento/cadastrar.php';
    }

    public function cadastrar()
    {
        $name = $_POST;
        $email = $_POST;
        $password = $_POST;
        $dono = new DonoEstabelecimento($name, $email, $password);
        $dono->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $dono->save();
        $_SESSION['user_id'] = $dono->id;
        $_SESSION['user_type'] = 'dono_estabelecimento';
        header('Location: /dono-estabelecimento');
    }

    public function editPerfil()
    {
        $data = $_POST;
        $dono = DonoEstabelecimento::find($_SESSION['user_id']);
        $dono->update($data);
        header('Location: /dono-estabelecimento/perfil');
    }

    public function deletePerfil()
    {
        $dono = DonoEstabelecimento::find($_SESSION['user_id']);
        $dono->delete();
        header('Location: /logout');
    }

    public function createEstabelecimento()
    {
        $data = $_POST;
        $estabelecimento = new Estabelecimento($data);
        $estabelecimento->dono_estabelecimento_id = $_SESSION['user_id'];
        $estabelecimento->save();
        header('Location: /dono-estabelecimento/estabelecimentos');
    }

    public function showEstabelecimento($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        require_once __DIR__ . '/../views/dono_estabelecimento/show_estabelecimento.php';
    }

    public function editEstabelecimento($id)
    {
        $data = $_POST;
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->update($data);
        header('Location: /dono-estabelecimento/estabelecimentos');
    }

    public function deleteEstabelecimento($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->delete();
        header('Location: /dono-estabelecimento/estabelecimentos');
    }

    public function listarEstabelecimentos()
    {
        $dono_id = $_SESSION['user_id'];
        $estabelecimentos = Estabelecimento::where('dono_estabelecimento_id', $dono_id); //->get();
        require_once __DIR__ . '/../views/dono_estabelecimento/estabelecimentos.php';
    }

    public function contatoSuporte()
    {
        require_once __DIR__ . '/../views/dono_estabelecimento/suporte.php';
    }
}
