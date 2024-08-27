<?php
$tittle = "Iniciar Sessão";
require_once __DIR__ . '/../layout/head.php';
require_once __DIR__ . '/../layout/header.php';
?>


<div class="login-container container my-5 py-5 px-5 sign_container">
    <h1 class="text-center">Login</h1>
    <div class="card-body mt-4">
        <form action="/kino/logar" method="post" id="loginForm">
            <div class="mb-3">
                <label for="username" class="form-label">Nome de Usuário</label>
                <input type="text" class="form-control" id="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mx-auto">Entrar</button>
            <p class="text-center mt-3">Não tem uma conta? <a href="/kino/auth/cadastrar">Cadastrar</a></p>
        </form>
    </div>
</div>
<!--
<main class="container mt-5 px-5 sign_container">
    <h1 class="text-center">Entrar</h1>
    <form class="mt-4">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        <p class="text-center mt-3">Não tem uma conta? <a href="/kino/cadastrar">Cadastrar</a></p>
    </form>
</main>
-->