
@extends("layout.index")

@section("contenu")

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h4 class="border-bottom pb-2 mb-4">Listes des Etudiants Inscrits</h4>

                <div class="mb-4">

                    <table class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($etudiants as $etudiant)
                                <tr>
                                    <th scope="row">{{ $loop->index + 1  }}</th>
                                    <td>{{ $etudiant->nom }}</td>
                                    <td>{{ $etudiant->prenom }}</td>
                                    <td>{{ $etudiant->classe_id }}</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Modifier</a>
                                        <a href="#" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                         {{ $etudiants->links() }}
                    </table>

                </div>

                <div class="d-flex mt-4">
                    <a href="#" class="btn btn-primary">Ajouter un Etudiant</a>
                </div>


        </div>


@endsection
