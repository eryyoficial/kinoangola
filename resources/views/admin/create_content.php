<h2>Create New Estabelecimento</h2>
<form action="/admin/store" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
    </div>
    <div>
        <label for="category">Category</label>
        <input type="text" id="category" name="category" required>
    </div>
    <button type="submit">Save</button>
</form>