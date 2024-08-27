<h2>Edit Estabelecimento</h2>
<form action="/admin/update" method="post">
    <input type="hidden" name="id" value="<?= $Estabelecimento->id ?>">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?= $Estabelecimento->name ?>" required>
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="<?= $Estabelecimento->address ?>" required>
    </div>
    <div>
        <label for="category">Category</label>
        <input type="text" id="category" name="category" value="<?= $Estabelecimento->category ?>" required>
    </div>
    <button type="submit">Update</button>
</form>