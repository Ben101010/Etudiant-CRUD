
@extends("layout.index")

@section("contenu")

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h4 class="border-bottom pb-2 mb-4">Ajouter un etudiant</h4>
                <div class="mb-4">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <p>
                               <h3>{{ session()->get('success') }}</h3>
                            </p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif




                    <form style="width: 65%;" method="post" action="{{ route('list_etudiant.ajouter') }}">

                        @csrf

                        <div class="mb-3">
                          <label class="form-label">Nom </label>
                          <input type="text" class="form-control" name="nom">
                        </div>

                        <div class="mb-3">
                          <label class="form-label">Prénom</label>
                          <input type="text" class="form-control" name="prenom">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Classe</label>
                            <select class="form-control" name="classe_id">
                                <option value=""></option>

                                @foreach ($classes as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                                @endforeach


                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href={{ route('list_etudiant') }} class="btn btn-danger">Annuler</a>
                      </form>

                </div>
        </div>

@endsection
