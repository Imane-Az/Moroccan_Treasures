{{-- extend template for side menu and navbar --}}
@extends('components.templatedashboard')

@section('contenu')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">Activity Data</h4>

        <!-- Vertically Centered Modal -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Type</th>
                                        <th>Titre</th>
                                        <th>Information</th>
                                        <th>ville_id</th>
                                        <th>image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->idA }}</td>
                                        <td>
                                            <i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                            <strong>{{ $activity->Type }}</strong>
                                        </td>
                                        <td>{{ $activity->Titre }}</td>
                                        <td class="description-column">{{ $activity->Information }}</td>
                                        <td>{{ $activity->ville_id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/activity_images/' . $activity->image) }}" alt="{{ $activity->Titre }}" width="75">

                                        </td>
                                        <td>
                                            <div class="dropdown ">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="/formupdate/{{ $activity->idA }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="/activities/delete/{{ $activity->idA }}" class="btn btn-sm btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Vertically Centered Modal -->

    </div>
    <!-- / Content -->
</div>

@endsection
