<h1>La liste des etudiants</h1>
<a href="{{route('etudiants.create')}}">Ajouter Etudiant</a>
<table border=1>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Groupe</th>
            <th>Actions</th>


        </tr>
    </thead>
    <tbody>
        @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->groupe->nom}}</td>
                <td>
                    <a href="{{route('etudiants.edit',$etudiant)}}">modifier</a>
                    <form action="{{route('etudiants.destroy',$etudiant)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">supprimer</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>