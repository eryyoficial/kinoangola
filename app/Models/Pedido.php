<?php

namespace app\models;

use PDO;

class Pedido
{
    public $id;
    public $cliente_id;
    public $estabelecimento_id;
    public $comida_id;
    public $estado;
    public $endereco;
    public $comprovativo;

    public function __construct($data)
    {
        $this->cliente_id = $data['cliente_id'];
        $this->estabelecimento_id = $data['estabelecimento_id'];
        $this->comida_id = $data['comida_id'];
        $this->estado = 'pendente';
        $this->endereco = $data['endereco'] ?? null;
        $this->comprovativo = $data['comprovativo'] ?? null;
    }

    public static function where($field, $value)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM pedidos WHERE $field = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function find($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM pedidos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function save()
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO pedidos (cliente_id, estabelecimento_id, comida_id, estado, endereco, comprovativo) VALUES (:cliente_id, :estabelecimento_id, :comida_id, :estado, :endereco, :comprovativo)");
        return $stmt->execute([
            'cliente_id' => $this->cliente_id,
            'estabelecimento_id' => $this->estabelecimento_id,
            'comida_id' => $this->comida_id,
            'estado' => $this->estado,
            'endereco' => $this->endereco,
            'comprovativo' => $this->comprovativo
        ]);
    }

    public function update($data)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE pedidos SET estado = :estado, endereco = :endereco, comprovativo = :comprovativo WHERE id = :id");
        return $stmt->execute([
            'estado' => $data['estado'],
            'endereco' => $data['endereco'],
            'comprovativo' => $data['comprovativo'],
            'id' => $this->id
        ]);
    }

    public function delete()
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM pedidos WHERE id = :id");
        return $stmt->execute(['id' => $this->id]);
    }
}
