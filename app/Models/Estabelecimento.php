<?php

namespace app\models;

use PDO;

class Estabelecimento
{
    public $id;
    public $dono_estabelecimento_id;
    public $name;
    public $endereco;
    public $iban;
    public $tipo_comida_id;

    public function __construct($data)
    {
        $this->dono_estabelecimento_id = $data['dono_estabelecimento_id'];
        $this->name = $data['name'];
        $this->endereco = $data['endereco'];
        $this->iban = $data['iban'];
        $this->tipo_comida_id = $data['tipo_comida_id'];
    }

    public static function all()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM estabelecimentos");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function find($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM estabelecimentos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function where($field, $value)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM estabelecimentos WHERE $field = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function save()
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO estabelecimentos (dono_estabelecimento_id, name, endereco, iban, tipo_comida_id) VALUES (:dono_estabelecimento_id, :name, :endereco, :iban, :tipo_comida_id)");
        return $stmt->execute([
            'dono_estabelecimento_id' => $this->dono_estabelecimento_id,
            'name' => $this->name,
            'endereco' => $this->endereco,
            'iban' => $this->iban,
            'tipo_comida_id' => $this->tipo_comida_id
        ]);
    }

    public function update($data)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE estabelecimentos SET name = :name, endereco = :endereco, iban = :iban, tipo_comida_id = :tipo_comida_id WHERE id = :id");
        return $stmt->execute([
            'name' => $data['name'],
            'endereco' => $data['endereco'],
            'iban' => $data['iban'],
            'tipo_comida_id' => $data['tipo_comida_id'],
            'id' => $this->id
        ]);
    }

    public function delete()
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM estabelecimentos WHERE id = :id");
        return $stmt->execute(['id' => $this->id]);
    }
}
