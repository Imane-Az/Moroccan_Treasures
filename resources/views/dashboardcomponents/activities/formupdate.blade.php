@extends('components.templatedashboard')

@section('contenu')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">Update Activity</h4>

        <div class="card">
            <div class="card-body">
                <form action="/activities/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="idA">Id</label>
                        <input type="text" class="form-control" id="idA" name="idA" value="{{ $activity->idA }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" name="Type" value="{{ $activity->Type }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" name="Titre" value="{{ $activity->Titre }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="prix">Prix</label>
                        <input type="text" class="form-control" id="prix" name="Prix" value="{{ $activity->Prix }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="information">Information</label>
                        <textarea class="form-control" id="information" name="Information" required>{{ $activity->Information }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="ville_id">Ville</label>
                        <select class="form-control" id="ville_id" name="ville_id" required>
                            @foreach($villes as $ville)
                                <option value="{{ $ville->idV }}" @if($ville->idV === $activity->ville_id) selected @endif>{{ $ville->nomVille }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Activity</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
