{{-- extend template for side menu and navbar --}}
@extends('components.templatedashboard')

@section('contenu')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">Destinations Data</h4>

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
                                        <th>nomVille</th>
                                        <th>image</th>
                                        <th>description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($villes as $ville)
                                    <tr>
                                        <td>{{ $ville->idV }}</td>
                                        <td>
                                            <i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                            <strong>{{ $ville->nomVille }}</strong>
                                        </td>
                                        {{-- <td>{{ $ville->image }}</td> --}}
                                        <td>
                                            <img src="{{ asset('storage/destination_images/' . $ville->image) }}" alt="{{ $ville->nomVille }}" width="75">
                                        </td>
                                        
                                        
                                        <td class="description-column">{{ $ville->description }}</td>
                                        <td>
                                            <a href="/formeditdestination/{{$ville->idV}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="/deletedestination/{{$ville->idV}}" class="btn btn-sm btn-danger">Delete</a>
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
