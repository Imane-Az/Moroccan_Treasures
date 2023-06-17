{{-- extend template for side menu and  navbar  --}}
@extends('components.templatedashboard')

@section('contenu')
 <!-- Content wrapper -->
 <div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y " style="margin: 30px;">
    <div class="row">

      <div class="col-lg-4 mb-4 order-0 m-3">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body ">
                <h5 class="card-title text-primary">Total Users</h5>
                <p class="mb-4"  style="font-size: 20px;">
                    {{ $totalUsers }}
                </p>
            </div>

            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-0">
                <img
                  src="../assets/img/illustrations/man-with-laptop-light.png"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-4 mb-4 order-0 m-3 ">
        <div class="card"  style="background-color: beige;">
          <div class="d-flex align-items-end row">
              <div class="card-body">

                <h5 class="card-title text-primary text-center">Total Destinations</h5>
                <p class="mb-4"  style="font-size: 20px; text-align:center;">
                  {{ $totalVilles }}
                </p>
            </div>

           
          </div>
        </div>
      </div>

      
    </div>
  </div>
  <!-- / Content -->


  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
@endsection