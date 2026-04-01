<h1>Ajouter un produit</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Nom"><br><br>
    <input type="number" name="price" placeholder="Prix"><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>

    <button type="submit">Ajouter</button>
</form>