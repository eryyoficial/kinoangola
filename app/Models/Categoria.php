<?php

class Categoria
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function all()
    {
        $stmt = $this->pdo->query('SELECT * FROM categorias');
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM categorias WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO categorias (nome, descricao) VALUES (:nome, :descricao)');
        return $stmt->execute($data);
    }

    public function update($id, $data)
    {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE categorias SET nome = :nome, descricao = :descricao WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM categorias WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }

    public function where($column, $value)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM categorias WHERE $column = :value");
        $stmt->execute(['value' => $value]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
