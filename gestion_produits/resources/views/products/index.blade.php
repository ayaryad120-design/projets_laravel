<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
</head>
<body>

<h1>Liste des produits</h1>

<a href="/products/create">Ajouter un produit</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>
        <td>
            <a href="/products/{{ $product->id }}/edit">Modifier</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>