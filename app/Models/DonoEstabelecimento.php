<?php

namespace app\models;

use PDO;

class DonoEstabelecimento
{
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function authenticate($email, $password)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM donos_estabelecimentos WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $dono = $stmt->fetch(PDO::FETCH_OBJ);

        if ($dono && password_verify($password, $dono->password)) {
            return $dono;
        }
        return false;
    }

    public static function find($id)
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM donos_estabelecimentos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function save()
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO donos_estabelecimentos (name, email, password) VALUES (:name, :email, :password)");
        return $stmt->execute([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);
    }

    public function update($data)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE donos_estabelecimentos SET name = :name, email = :email, password = :password WHERE id = :id");
        return $stmt->execute([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'id' => $this->id
        ]);
    }

    public function delete()
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM donos_estabelecimentos WHERE id = :id");
        return $stmt->execute(['id' => $this->id]);
    }
}
