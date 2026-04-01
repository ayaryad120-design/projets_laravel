<h1>Modifier un etudiant</h1>
<form action="{{route('etudiants.update',$etudiant)}}" method='POST'>
    @csrf
    @method('put')
    <label for="">Nom</label>
    <input type="text" name="nom" value='{{$etudiant->nom}}'>
    <label for="">Email</label>
    <input type="email" name="email" value='{{$etudiant->email}}'>
    <label for="">Groupe</label>
    <select name="groupe_id" id="">
        @foreach ($groupes as $groupe)
            <option value="{{$groupe->id}}"
            {{$groupe->id==$etudiant->groupe_id?'selected':''}}>
            {{$groupe->nom}}
        </option>
        @endforeach
    </select>
    <button type="submit">Modifier</button>

</form>