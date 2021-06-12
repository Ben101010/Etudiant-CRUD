
@extends("layout.index")

@section("contenu")

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h4 class="border-bottom pb-2 mb-4">Listes des Etudiants Inscrits</h4>

                <div class="mb-4">

                    @if (session()->has('supprimerSuccess'))
                    <div class="alert alert-success">
                        <p>
                           <h3>{{ session()->get('supprimerSuccess') }}</h3>
                        </p>
                    </div>
                @endif

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
                                    <td>{{ $etudiant->classe->libelle}}</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Modifier</a>
                                        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet étudiant'))
                                        {document.getElementById('form-{{ $etudiant->id }}').submit()}">Supprimer</a>

                                            <form id="form-{{ $etudiant->id }}" action="{{ route('list_etudiant.supprimer',['etudiant'=>$etudiant->id])}}" method="Post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">

                                            </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
                <div class="d-flex justify-content-end mb-4">
                    {{ $etudiants->links() }}
                </div>

                <div class="d-flex mt-4">
                    <a href="{{ route('list_etudiant.create') }}" class="btn btn-primary">Ajouter un Etudiant</a>
                </div>


        </div>


@endsection
