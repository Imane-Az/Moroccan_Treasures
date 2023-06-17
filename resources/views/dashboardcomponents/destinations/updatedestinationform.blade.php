@extends('components.templatedashboard')

@section('contenu')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">Update Destination</h4>

        <div class="card">
            <div class="card-body">
                <form action="{{'/updatedestination/{id}' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="idV">Id</label>
                        <input type="text" class="form-control" id="idV" name="idV" value="{{ $ville->idV }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $ville->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $ville->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Destination</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
