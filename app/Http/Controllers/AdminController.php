<?php

namespace app\controllers;

use app\models\Estabelecimento;
use app\models\Cliente;
use app\models\Administrador;
use app\models\Avaliacao;

class AdminController
{
    public function dashboard()
    {
        require_once __DIR__ . '/../views/admin/dashboard.php';
    }

    public function loginForm()
    {
        require_once __DIR__ . '/../views/admin/login.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $admin = Administrador::authenticate($email, $password);

        if ($admin) {
            $_SESSION['user_id'] = $admin->id;
            $_SESSION['user_type'] = 'administrador';
            header('Location: /admin');
        } else {
            $_SESSION['error'] = 'Login failed';
            header('Location: /admin/login');
        }
    }

    public function listarEstabelecimentos()
    {
        $estabelecimentos = Estabelecimento::all();
        require_once __DIR__ . '/../views/admin/estabelecimentos.php';
    }

    public function createEstabelecimento()
    {
        $data = $_POST;
        $estabelecimento = new Estabelecimento($data);
        $estabelecimento->save();
        header('Location: /admin/estabelecimentos');
    }

    public function showEstabelecimento($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        require_once __DIR__ . '/../views/admin/show_estabelecimento.php';
    }

    public function editEstabelecimento($id)
    {
        $data = $_POST;
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->update($data);
        header('Location: /admin/estabelecimentos');
    }

    public function deleteEstabelecimento($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->delete();
        header('Location: /admin/estabelecimentos');
    }

    public function listarClientes()
    {
        $clientes = Cliente::all();
        require_once __DIR__ . '/../views/admin/clientes.php';
    }

    public function deleteCliente($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        header('Location: /admin/clientes');
    }

    public function editCliente($id)
    {
        $data = $_POST;
        $cliente = Cliente::find($id);
        $cliente->update($data);
        header('Location: /admin/clientes');
    }

    public function listarAdministradores()
    {
        $administradores = Administrador::all();
        require_once __DIR__ . '/../views/admin/administradores.php';
    }

    public function createAdministrador()
    {
        $name = $_POST;
        $email = $_POST;
        $password = $_POST;
        $admin = new Administrador($name, $email, $password);
        $admin->save();
        header('Location: /admin/administradores');
    }

    public function showAdministrador($id)
    {
        $admin = Administrador::find($id);
        require_once __DIR__ . '/../views/admin/show_administrador.php';
    }

    public function editAdministrador($id)
    {
        $data = $_POST;
        $admin = Administrador::find($id);
        $admin->update($data);
        header('Location: /admin/administradores');
    }

    public function deleteAdministrador($id)
    {
        $admin = Administrador::find($id);
        $admin->delete();
        header('Location: /admin/administradores');
    }

    public function listarAvaliacoes()
    {
        $avaliacoes = Avaliacao::all();
        require_once __DIR__ . '/../views/admin/avaliacoes.php';
    }

    public function atendeSuporte()
    {
        // Logic to handle support requests
        require_once __DIR__ . '/../views/admin/suporte.php';
    }

    public function gerarRelatorios()
    {
        // Logic to generate reports
        require_once __DIR__ . '/../views/admin/relatorios.php';
    }
}
