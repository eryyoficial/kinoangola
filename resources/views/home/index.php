<?php


$tittle = "Página Inicial";
require_once __DIR__ . '/../layout/head.php';
require_once __DIR__ . '/../layout/header.php';
?>

<body>

    <!-- ========================= CARROSSEL ========================= -->
    <div id="carouselExampleCaptions" class="container mt-5 carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/kino/public/images/back (1).png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Primeiro slide</h5>
                    <p>Conteúdo representativo para o primeiro slide.</p>
                </div>
            </div>
        </div>
        <div class="carousel-inner active">
            <div class="carousel-item">
                <img src="/kino/public/images/back (1).png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Primeiro slide</h5>
                    <p>Conteúdo representativo para o primeiro slide.</p>
                </div>
            </div>
        </div>
        <div class="carousel-inner active">
            <div class="carousel-item">
                <img src="/kino/public/images/back (1).png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Primeiro slide</h5>
                    <p>Conteúdo representativo para o primeiro slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <main class="container mt-5 px-5">

        <!-- ========================= BUSCA RÁPIDA ========================= -->
        <h1 class="text-center">Bem-vindo ao KINO</h1>
        <p class="text-center">Encontre os melhores restaurantes, bares, e food trucks em Luanda!</p>

        <form class="form-inline justify-content-center mt-4">
            <input class="form-control mr-sm-2 mb-1" type="search" placeholder="Buscar por nome, tipo de comida..." aria-label="Search">
            <button class="btn btn-warning my-2 my-sm-0" type="submit">Buscar</button>
        </form>



        <!-- ========================= BANNER 1 ========================= -->
        <div class="row mt-5">
            <div style="flex-direction: column; gap: 0 2rem" class="col-md-4  d-flex justify-content-center align-items-center">
                <h2>Bares</h2>
                <p>Encontre bares incríveis para se divertir.</p>

                <img style="width: 300px;" src="/kino/public/images/qd (1).png" alt="imagem rest" srcset="">

            </div>
            <div style="flex-direction: column; gap: 0 2rem" class="col-md-4  d-flex justify-content-center align-items-center">
                <h2>Roulotes</h2>
                <p>Explore opções de comida de rua deliciosas.</p>

                <img style="width: 300px;" src="/kino/public/images/qd (13).png" alt="imagem rest" srcset="">

            </div>
            <div style="flex-direction: column; gap: 0 2rem" class="col-md-4  d-flex justify-content-center align-items-center">
                <h2>Restaurantes</h2>
                <p>Descubra os melhores restaurantes na cidade.</p>

                <img style="width: 300px;" src="/kino/public/images/qd (12).png" alt="imagem rest" srcset="">

            </div>
        </div>


        <!-- ========================= BANNER 2 ========================= -->

        <div class="container text-center my-5">




            <!-- ========================= TOP 3 MELHORES ESTABELECIMENTOS ========================= -->
            <h2>Top 3 Estabelecimentos com Maiores Avaliações</h2>
            <div class="container my-5">
                <div class="row">
                    <!-- Estabelecimento 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/kino/public/images/qd (8).png" class="card-img-top" alt="Imagem do Estabelecimento 1">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Estabelecimento 1</h5>
                                <p class="card-text">Descrição breve do estabelecimento, destacando pontos fortes.</p>
                                <p class="card-text"><strong>Avaliação:</strong> 4.9/5</p>
                                <a href="link-para-estabelecimento1" class="btn btn-warning">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <!-- Estabelecimento 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/kino/public/images/qd (8).png" class="card-img-top" alt="Imagem do Estabelecimento 2">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Estabelecimento 2</h5>
                                <p class="card-text">Descrição breve do estabelecimento, destacando pontos fortes.</p>
                                <p class="card-text"><strong>Avaliação:</strong> 4.8/5</p>
                                <a href="link-para-estabelecimento2" class="btn btn-warning">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                    <!-- Estabelecimento 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="/kino/public/images/qd (8).png" class="card-img-top" alt="Imagem do Estabelecimento 3">
                            <div class="card-body">
                                <h5 class="card-title">Nome do Estabelecimento 3</h5>
                                <p class="card-text">Descrição breve do estabelecimento, destacando pontos fortes.</p>
                                <p class="card-text"><strong>Avaliação:</strong> 4.7/5</p>
                                <a href="link-para-estabelecimento3" class="btn btn-warning">Saiba Mais</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="estabelecimentos-list">
                    <!--    Os estabelecimentos serão carregados aqui -->
                </div>
                <button id="load-more-btn" class="btn btn-warning load-more mb-5">Ver mais</button>
            </div>
            <!--
            <div class="container">
                <h2>Melhores Estabelecimentos</h2>
                <div id="estabelecimentos-list">
                     Os estabelecimentos serão carregados aqui
                </div>
                <button id="load-more-btn" class="btn btn-warning load-more">Ver mais</button>
            </div> -->



            <!-- ========================= SERVIÇOS 2 ========================= -->
            <h2>Serviços</h2>
            <div class="row">
                <!-- Serviços para Clientes -->
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-search service_icon'></i></div>
                    <h4>Descubra com Facilidade</h4>
                    <p>Encontre rapidamente restaurantes, bares, food trucks e locais de lazer com nossa busca personalizada.</p>
                </div>
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-food-menu service_icon'></i></div>
                    <h4>Variedade Gastronômica</h4>
                    <p>Explore uma vasta seleção de comidas e bebidas, desde pratos tradicionais a experiências gastronômicas exclusivas.</p>
                </div>
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-box service_icon'></i></div>
                    <h4>Peça e Receba em Casa</h4>
                    <p>Faça seus pedidos online e receba no conforto da sua casa, com entrega rápida e eficiente.</p>
                </div>
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-star service_icon'></i></div>
                    <h4>Avaliações e Recomendações</h4>
                    <p>Deixe e leia avaliações para escolher o melhor estabelecimento baseado na experiência de outros clientes.</p>
                </div>
                <!-- Serviços para Estabelecimentos -->
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-planet service_icon'></i></div>
                    <h4>Maior Visibilidade Online</h4>
                    <p>Tenha seu negócio destacado em uma plataforma amplamente acessada, aumentando a visibilidade e atraindo novos clientes.</p>
                </div>
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-cube service_icon'></i></div>
                    <h4>Gerenciamento Simplificado</h4>
                    <p>Atualize informações, cardápios e preços facilmente, e mantenha o controle total sobre o seu perfil e ofertas.</p>
                </div>
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-chart service_icon'></i></div>
                    <h4>Análise de Desempenho</h4>
                    <p>Acompanhe métricas e feedbacks para entender o desempenho do seu negócio e ajustar suas estratégias.</p>
                </div>
                <div class="col-md-3 py-5">
                    <div class="service-icon"><i class='bx bx-support service_icon'></i></div>
                    <h4>Suporte Dedicado</h4>
                    <p>Receba assistência especializada para resolver problemas e otimizar a presença do seu negócio na plataforma.</p>
                </div>
            </div>

        </div>
    </main>

    <script>
        let currentIndex = 0;
        const estabelecimentos = [
            <?php foreach ($estabelecimentos as $estabelecimento) : ?> {
                    nome: "<?= $estabelecimento->nome ?>",
                    descricao: "<?= $estabelecimento->descricao ?>",
                    endereco: "<?= $estabelecimento->endereco ?>",
                    telefone: "<?= $estabelecimento->telefone ?>",
                    avaliacao: <?= $estabelecimento->avaliacao ?>
                },
            <?php endforeach; ?>
        ];

        function loadMoreEstabelecimentos() {
            const list = document.getElementById('estabelecimentos-list');
            const nextEstabelecimentos = estabelecimentos.slice(currentIndex, currentIndex + 5);

            nextEstabelecimentos.forEach(estabelecimento => {
                const div = document.createElement('div');
                div.classList.add('estabelecimento');
                div.innerHTML = `
                    <h3>${estabelecimento.nome}</h3>
                    <p>${estabelecimento.descricao}</p>
                    <p><strong>Endereço:</strong> ${estabelecimento.endereco}</p>
                    <p><strong>Telefone:</strong> ${estabelecimento.telefone}</p>
                    <p><strong>Avaliação:</strong> ${estabelecimento.avaliacao}</p>
                `;
                list.appendChild(div);
            });

            currentIndex += 5;
            if (currentIndex >= estabelecimentos.length) {
                document.getElementById('load-more-btn').style.display = 'none';
            }
        }

        document.getElementById('load-more-btn').addEventListener('click', loadMoreEstabelecimentos);

        document.addEventListener('DOMContentLoaded', () => {
            loadMoreEstabelecimentos();
            if (estabelecimentos.length > 5) {
                document.getElementById('load-more-btn').style.display = 'block';
            }
        });
    </script>
</body>

</html>