<?php

class AvaliacaoController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        $stmt = $this->pdo->query('SELECT * FROM avaliacoes');
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function show($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM avaliacoes WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare('INSERT INTO avaliacoes (cliente_id, estabelecimento_id, avaliacao, comentario) VALUES (:cliente_id, :estabelecimento_id, :avaliacao, :comentario)');
        return $stmt->execute($data);
    }

    public function edit($id, $data)
    {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE avaliacoes SET cliente_id = :cliente_id, estabelecimento_id = :estabelecimento_id, avaliacao = :avaliacao, comentario = :comentario WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM avaliacoes WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
