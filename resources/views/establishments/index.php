<?php
$tittle = "Minha Empresa";
require_once __DIR__ . '/../layout/head.php';
require_once __DIR__ . '/../layout/header.php';
?>

<body>

    <main class="container mt-5 px-5">
        <div class="row">
            <div class="col-md-8">
                <h1>Nome do Estabelecimento</h1>
                <p>Endereço: Rua Exemplo, 123, Luanda</p>
                <p>Telefone: (123) 456-7890</p>
                <p>Horário de Funcionamento: 10:00 - 22:00</p>
                <p>Descrição detalhada do estabelecimento.</p>

                <h3>Menu</h3>
                <ul>
                    <li>Prato 1 - Preço</li>
                    <li>Prato 2 - Preço</li>
                    <li>Prato 3 - Preço</li>
                </ul>

                <h3>Avaliações</h3>
                <div class="review">
                    <p><strong>Usuário 1:</strong> Ótimo lugar!</p>
                </div>
                <div class="review">
                    <p><strong>Usuário 2:</strong> Comida deliciosa.</p>
                </div>
                <!-- Mais avaliações aqui -->

                <form class="mt-4">
                    <div class="form-group">
                        <label for="review">Deixe uma avaliação:</label>
                        <textarea class="form-control" id="review" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

            <div class="col-md-4">
                <h3>Localização</h3>
                <div id="map"></div>
            </div>
        </div>
    </main>
</body>

</html>