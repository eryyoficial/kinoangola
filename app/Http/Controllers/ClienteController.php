<?php

namespace app\controllers;

use app\models\Estabelecimento;
use app\models\Pedido;
use app\models\Avaliacao;

class ClienteController
{
    public function listarEstabelecimentos()
    {
        $estabelecimentos = Estabelecimento::all();
        $content = "cliente/estabelecimentos";
        require_once __DIR__ . '/../views/layout/main.php';
    }

    public function createPedido()
    {
        $data = $_POST;
        $pedido = new Pedido($data);
        $pedido->cliente_id = $_SESSION['user_id'];
        $pedido->estado = 'pendente';
        $pedido->save();
        header('Location: /cliente/pedidos');
    }

    public function showEstabelecimento($id)
    {
        $estabelecimento = Estabelecimento::find($id);
        require_once __DIR__ . '/../views/cliente/show_estabelecimento.php';
    }

    public function listarPedidos()
    {
        $cliente_id = $_SESSION['user_id'];
        $pedidos = Pedido::where('cliente_id', $cliente_id);
        //$pedidos->get();
        require_once __DIR__ . '/../views/cliente/pedidos.php';
    }

    public function showPedido($id)
    {
        $pedido = Pedido::find($id);
        require_once __DIR__ . '/../views/cliente/show_pedido.php';
    }

    public function cancelarPedido($id)
    {
        $pedido = Pedido::find($id);
        $pedido->estado = 'cancelado';
        $pedido->save();
        header('Location: /cliente/pedidos');
    }

    public function confirmarPedido($id)
    {
        $data = $_POST;
        $pedido = Pedido::find($id);
        $pedido->estado = 'confirmado';
        $pedido->endereco = $data['endereco'];
        $pedido->comprovativo = $data['comprovativo']; // assume file upload handling is done
        $pedido->save();
        header('Location: /cliente/pedidos');
    }

    public function listarAvaliacoes()
    {
        $cliente_id = $_SESSION['user_id'];
        $avaliacoes = Avaliacao::where('cliente_id', $cliente_id); //->get();
        require_once __DIR__ . '/../views/cliente/avaliacoes.php';
    }

    public function contatoSuporte()
    {
        require_once __DIR__ . '/../views/cliente/suporte.php';
    }

    public function createAvaliacao()
    {
        $data = $_POST;
        $avaliacao = new Avaliacao($data);
        $avaliacao->cliente_id = $_SESSION['user_id'];
        $avaliacao->save();
        header('Location: /cliente/avaliacoes');
    }
}
