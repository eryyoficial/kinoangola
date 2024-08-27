<div class="container">
    <h2 class="mt-5">Gerir Perfil</h2>
    <form action="/estabelecimento/gerir_perfil" method="post">
        <!-- Campos de perfil -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $estabelecimento->nome; ?>" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $estabelecimento->endereco; ?>" required>
        </div>
        <!-- Outros campos -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>