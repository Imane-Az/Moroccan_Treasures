{{-- extend template for side menu and navbar --}}
@extends('components.templatedashboard')

@section('contenu')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">Users Data</h4>

        <!-- Vertically Centered Modal -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            Add User
                        </button>

                        <!-- Modal AjouterFormulaire-->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Formulaire d'ajout</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-xl">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <form action='/adduser' method="post">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="id" class="form-label">Id</label>
                                                            <input type="text" class="form-control" id="id" name="id">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="nameU" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="nameU" name="nameU">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="text" class="form-control" id="email" name="email">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="password" name="password">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="UserType" class="form-label">User Type</label>
                                                            <select class="form-control" id="UserType" name="UserType">
                                                                <option value="user">User</option>
                                                                <option value="admin">Admin</option>
                                                            </select>
                                                        </div>
                                                        <button type="submit" class="btn btn-secondary">Valider</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Striped Rows -->
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>UserType</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($listeUsers as $u)
                                        <tr>
                                            <td>{{ $u->id }}</td>
                                            <td>
                                                <i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                                <strong>{{ $u->name }}</strong>
                                            </td>
                                            <td>{{ $u->email }}</td>
                                            <td><span class="">{{ $u->UserType }}</span></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="/formupdateuser/{{$u->id}}" class="dropdown-item"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a href="/deleteuser/{{$u->id}}" class="dropdown-item"><i class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Striped Rows -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ Vertically Centered Modal -->

    </div>
    <!-- / Content -->
</div>

@endsection
