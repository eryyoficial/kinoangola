<h2>Estabelecimentos</h2>
<ul>
    <?php foreach ($Estabelecimentos as $Estabelecimento) : ?>
        <li>
            <a href="/Estabelecimentos/show?id=<?= $Estabelecimento->id ?>"><?= $Estabelecimento->name ?></a>
        </li>
    <?php endforeach; ?>
</ul>