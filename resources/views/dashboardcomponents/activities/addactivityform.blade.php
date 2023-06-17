@extends('components.templatedashboard')

@section('contenu')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">Add Activity</h4>


        <div class="card">
            <div class="card-body">
                <form action="/activities/add" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Type">Type</label>
                        <input type="text" class="form-control" id="Type" name="Type" required>
                    </div>
                    <div class="mb-3">
                        <label for="Titre">Titre</label>
                        <input type="text" class="form-control" id="Titre" name="Titre" required>
                    </div>
                    <div class="mb-3">
                        <label for="Prix">Prix</label>
                        <input type="text" class="form-control" id="Prix" name="Prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="information">Information</label>
                        <textarea class="form-control" id="information" name="Information" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="ville_id">Ville</label>
                        <select class="form-control" id="ville_id" name="ville_id" required>
                            @foreach($villes as $ville)
                                <option value="{{ $ville->idV }}">{{ $ville->nomVille }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Activity</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
