<?php
$tittle = "Cadastra - se";
require_once __DIR__ . '/../layout/head.php';
require_once __DIR__ . '/../layout/header.php';
?>

<main class="login-container container my-5 py-5 px-5 sign_container">
    <h1 class="text-center">Cadastrar</h1>
    <form class="mt-4 ">
        <div class="form-group">
            <label for="name">Nome Completo:</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirmar Senha:</label>
            <input type="password" class="form-control" id="confirm-password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        <p class="text-center mt-3">Já tem uma conta? <a href="/kino/logar">Entrar</a></p>
    </form>
</main>