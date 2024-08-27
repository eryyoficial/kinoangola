<?php


$tittle = "Página Inicial";
require_once __DIR__ . '/../layout/head.php';
require_once __DIR__ . '/../layout/header.php';
?>



<main class="container py-5 cliente_cont_est">
    <div class="cliente_cont_son w-100">
        <div class="card p-3 cliente_cards">
            <img class="" src="/kino/public/images/qd (3).png" alt="Estabelecimento 1">
            <div class="info_est py-2 pe-3">
                <h2 class="">Nome</h2>
                <div class="cliente_desc_est w-50">
                    <p>Avaliação</p>
                    <p>Serviços</p>
                    <p>Telefone</p>
                    <p>Aberto 24/24h</p>
                    <p>Endereço</p>
                    <p>IBAN</p>
                </div>
                <a href="#" class="btn btn-warning">Ver mais</a>
            </div>
        </div>
        <div class="card p-3 cliente_cards">
            <img class="" src="/kino/public/images/qd (3).png" alt="Estabelecimento 1">
            <div class="info_est py-2 pe-3">
                <h2 class="">Nome</h2>
                <div class="cliente_desc_est w-50">
                    <p>Avaliação</p>
                    <p>Serviços</p>
                    <p>Telefone</p>
                    <p>Aberto 24/24h</p>
                    <p>Endereço</p>
                    <p>IBAN</p>
                </div>
                <a href="#" class="btn btn-warning">Ver mais</a>
            </div>
        </div>
    </div>



    <div style="flex-direction: column;" class="container d-flex">
        <h3>Localização</h3>
        <div id="map"> ahah</div>
    </div>
</main>