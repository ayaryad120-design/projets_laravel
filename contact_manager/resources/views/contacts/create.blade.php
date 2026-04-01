<h1>Ajouter Contact</h1>
<form action="{{route('contacts.store')}}" method='POST'>
    @csrf
    <label for="name">Nom</label><br>
    <input type="text" name="name" id="name"><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br>
    <label for="phone">Téléphone</label><br>
    <input type="text" name="phone" id="phone"><br><br>
    <button type="submit">Ajouter</button>

</form>