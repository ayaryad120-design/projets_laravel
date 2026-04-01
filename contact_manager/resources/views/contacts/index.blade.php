<h1>Table des contacts</h1>
<a href="{{route('contacts.create')}}">Ajouter </a>
<table border=1>
    <thead>
        <tr>
            
            <th>nom</th>
            
            <th>email</th>
            <th>telephone</th>
            <th>Actions</th>
        </tr>
    
    </thead>
    @foreach($contacts as $contact )
    <tbody>
        <tr>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
            <td>
                <a href="{{route('contacts.edit',$contact->id)}}">modifier</a>
                <form action="{{route('contacts.destroy',$contact->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">supprimer</button>
                </form>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>