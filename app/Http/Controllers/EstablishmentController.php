<?php

namespace app\controllers;

use app\models\Estabelecimento;

class EstabelecimentoController
{

    public function index()
    {
        $estabelecimentos = Estabelecimento::all();
        include __DIR__ . '/../views/estabelecimento/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../views/estabelecimento/create.php';
    }

    public function store()
    {
        $estabelecimento = new Estabelecimento();
        $estabelecimento->nome = $_POST['nome'];
        $estabelecimento->dono_id = $_POST['dono_id'];
        $estabelecimento->endereco = $_POST['endereco'];
        $estabelecimento->telefone = $_POST['telefone'];
        $estabelecimento->email = $_POST['email'];
        $estabelecimento->horario_abertura = $_POST['horario_abertura'];
        $estabelecimento->horario_fechamento = $_POST['horario_fechamento'];
        $estabelecimento->descricao = $_POST['descricao'];
        $estabelecimento->servicos = $_POST['servicos'];
        $estabelecimento->latitude = $_POST['latitude'];
        $estabelecimento->longitude = $_POST['longitude'];
        $estabelecimento->avaliacao = $_POST['avaliacao'];
        $estabelecimento->save();
        header('Location: /estabelecimentos');
    }

    public function edit()
    {
        $estabelecimento = Estabelecimento::find($_GET['id']);
        include __DIR__ . '/../views/estabelecimento/edit.php';
    }

    public function update()
    {
        $estabelecimento = Estabelecimento::find($_POST['id']);
        $estabelecimento->nome = $_POST['nome'];
        $estabelecimento->dono_id = $_POST['dono_id'];
        $estabelecimento->endereco = $_POST['endereco'];
        $estabelecimento->telefone = $_POST['telefone'];
        $estabelecimento->email = $_POST['email'];
        $estabelecimento->horario_abertura = $_POST['horario_abertura'];
        $estabelecimento->horario_fechamento = $_POST['horario_fechamento'];
        $estabelecimento->descricao = $_POST['descricao'];
        $estabelecimento->servicos = $_POST['servicos'];
        $estabelecimento->latitude = $_POST['latitude'];
        $estabelecimento->longitude = $_POST['longitude'];
        $estabelecimento->avaliacao = $_POST['avaliacao'];
        $estabelecimento->save();
        header('Location: /estabelecimentos');
    }

    public function delete()
    {
        $estabelecimento = Estabelecimento::find($_GET['id']);
        $estabelecimento->delete();
        header('Location: /estabelecimentos');
    }
}
