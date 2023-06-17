

  {{-- extend template for side menu and  navbar  --}}
@extends('components.templatedashboard')

@section('contenu')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Update</span> Form</h4>

        <!-- Basic Layout -->
        <div class="row">
          <div class="col-xl">
            <div class="card mb-4">
              <div class="card-body">
                <form action='/updateuser' method="post" >
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="id">Id</label>
                        <input type="text" class="form-control" name='id' id="id" value={{$user->id}} readonly/>
                      </div>
                  <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="nameU" value={{$user->name}} />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value={{$user->email}}/>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        value={{$user->password}}
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="UserType">User Type</label>
                    <select class="form-control" id="UserType" name="UserType">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                   </select>
                  </div><br/>
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
              </div>
            </div>
          </div>
         
          
        </div>
    </div>


</div>
    <!-- / Content -->


@endsection

 

