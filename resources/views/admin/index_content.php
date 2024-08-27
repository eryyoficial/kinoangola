<h2>Admin Panel</h2>
<a href="/admin/create">Create New Estabelecimento</a>
<ul>
    <?php foreach ($Estabelecimentos as $Estabelecimento) : ?>
        <li>
            <a href="/Estabelecimentos/show?id=<?= $Estabelecimento->id ?>"><?= $Estabelecimento->name ?></a>
            <a href="/admin/edit?id=<?= $Estabelecimento->id ?>">Edit</a>
            <a href="/admin/delete?id=<?= $Estabelecimento->id ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>