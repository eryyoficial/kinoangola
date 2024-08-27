<?php

namespace app\controllers;

use app\models\Estabelecimento;
use app\models\Pedido;
use app\models\Avaliacao;

class EstabelecimentoController
{
    public function dashboard()
    {
        require_once __DIR__ . '/../views/estabelecimento/dashboard.php';
    }

    public function loginForm()
    {
        require_once __DIR__ . '/../views/estabelecimento/login.php';
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $estabelecimento = Estabelecimento::authenticate($email, $password);

        if ($estabelecimento) {
            $_SESSION['user_id'] = $estabelecimento->id;
            $_SESSION['user_type'] = 'estabelecimento';
            header('Location: /estabelecimento');
        } else {
            $_SESSION['error'] = 'Login failed';
            header('Location: /estabelecimento/login');
        }
    }

    public function showPerfil()
    {
        $estabelecimento = Estabelecimento::find($_SESSION['user_id']);
        require_once __DIR__ . '/../views/estabelecimento/perfil.php';
    }

    public function editPerfil()
    {
        $data = $_POST;
        $estabelecimento = Estabelecimento::find($_SESSION['user_id']);
        $estabelecimento->update($data);
        header('Location: /estabelecimento/perfil');
    }

    public function listarPedidos()
    {
        $estabelecimento_id = $_SESSION['user_id'];
        $pedidos = Pedido::where('estabelecimento_id', $estabelecimento_id); //->get();
        require_once __DIR__ . '/../views/estabelecimento/pedidos.php';
    }

    public function entregarPedido($id)
    {
        $pedido = Pedido::find($id);
        $pedido->estado = 'entregado';
        $pedido->save();
        header('Location: /estabelecimento/pedidos');
    }

    public function listarAvaliacoes()
    {
        $estabelecimento_id = $_SESSION['user_id'];
        $avaliacoes = Avaliacao::where('estabelecimento_id', $estabelecimento_id); //->get();
        require_once __DIR__ . '/../views/estabelecimento/avaliacoes.php';
    }
}
