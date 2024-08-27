<?php

namespace app\models;

use PDO;

class EstablishmentCategoria {
    public $estabelecimento_id;
    public $categoria_id;

    public static function all() {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM estabelecimento_categorias');
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function find($estabelecimento_id, $categoria_id) {
        global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM estabelecimento_categorias WHERE estabelecimento_id = :estabelecimento_id AND categoria_id = :categoria_id');
        $stmt->execute([
            'estabelecimento_id' => $estabelecimento_id,
            'categoria_id' => $categoria_id
        ]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    public function save() {
        global $pdo;
        if ($this->estabelecimento_id && $this->categoria_id) {
            $stmt = $pdo->prepare('UPDATE estabelecimento_categorias SET categoria_id = :categoria_id WHERE estabelecimento_id = :estabelecimento_id');
            $stmt->execute([
                'categoria_id' => $this->categoria_id,
                'estabelecimento_id' => $this->estabelecimento_id
            ]);
        } else {
            $stmt = $pdo->prepare('INSERT INTO estabelecimento_categorias (estabelecimento_id, categoria_id) VALUES (:estabelecimento_id, :categoria_id)');
            $stmt->execute([
                'estabelecimento_id' => $this->estabelecimento_id,
                'categoria_id' => $this->categoria_id
            ]);
        }
    }

    public function delete() {
        global $pdo;
        $stmt = $pdo->prepare('DELETE FROM estabelecimento_categorias WHERE estabelecimento_id = :estabelecimento_id AND categoria_id = :categoria_id');
        $stmt->execute([
            'estabelecimento_id' => $this->estabelecimento_id,
            'categoria_id' => $this->categoria_id
        ]);
    }
}
