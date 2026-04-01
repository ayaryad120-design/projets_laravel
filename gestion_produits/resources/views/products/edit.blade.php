<h1>Modifier produit</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}"><br><br>
    <input type="number" name="price" value="{{ $product->price }}"><br><br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <button type="submit">Modifier</button>
</form>