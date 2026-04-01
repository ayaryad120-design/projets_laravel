<h1>Modifier un contact</h1>
<form action="{{route('contacts.update', $contact->id)}}" method='POST'>
    @csrf
    @method('PUT')
    <label for="name">Nom</label><br>
    <input type="text" name="name" id="name" value="{{$contact->name}}"><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" value="{{$contact->email}}"><br>
    <label for="phone">Téléphone</label><br>
    <input type="text" name="phone" id="phone" value="{{$contact->phone}}"><br><br>
    <button type="submit">Modifier</button>
</form>