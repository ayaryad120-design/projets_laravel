<h1>Ajouter un etudiant</h1>
<form action="{{route('etudiants.store')}}" method='POST'>
    @csrf
    <label for="">Nom</label>
    <input type="text" name="nom">
    <label for="">Email</label>
    <input type="email" name="email">
    <label for="">Groupe</label>
    <select name="groupe_id" id="">
        @foreach ($groupes as $groupe)
            <option value="{{$groupe->id}}">{{$groupe->nom}}</option>
        @endforeach
    </select>
    <button type="submit">Ajouter</button>

</form>