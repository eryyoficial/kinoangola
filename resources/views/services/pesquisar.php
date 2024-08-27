<div class="container">
    <h2 class="mt-5">Pesquisar Estabelecimentos</h2>
    <form action="/cliente/pesquisar" method="get">
        <div class="mb-3">
            <label for="filtro" class="form-label">Filtro</label>
            <input type="text" class="form-control" id="filtro" name="filtro" placeholder="Pesquisar...">
        </div>
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>
    <div class="mt-4">
        <?php foreach ($estabelecimentos as $estabelecimento) : ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $estabelecimento->nome; ?></h5>
                    <p class="card-text"><?php echo $estabelecimento->descricao; ?></p>
                    <a href="/cliente/visualizar?id=<?php echo $estabelecimento->id; ?>" class="btn btn-primary">Ver Detalhes</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>