<?php

namespace app\models;

use PDO;

class Avaliacao
{
    public $id;
    public $cliente_id;
    public $estabelecimento_id;
    public $comentario;
    public $rating;

    public function __construct($data)
    {
        $this->cliente_id = $data['cliente_id'];
        $this->estabelecimento_id = $data['estabelecimento_id'];
        $this->comentario = $data['comentario'];
        $this->rating = $data['rating'];
    }

    public static function where($field, $value)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM avaliacoes WHERE $field = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function all()
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM avaliacoes");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function find($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM avaliacoes WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function save()
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO avaliacoes (cliente_id, estabelecimento_id, comentario, rating) VALUES (:cliente_id, :estabelecimento_id, :comentario, :rating)");
        return $stmt->execute([
            'cliente_id' => $this->cliente_id,
            'estabelecimento_id' => $this->estabelecimento_id,
            'comentario' => $this->comentario,
            'rating' => $this->rating
        ]);
    }

    public function delete()
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM avaliacoes WHERE id = :id");
        return $stmt->execute(['id' => $this->id]);
    }
}
