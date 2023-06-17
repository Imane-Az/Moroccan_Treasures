@extends('components.template1')

@section('style')
<link rel="stylesheet" type="text/css" href="css/destinations/destinations.css">
@endsection

@section('hero')
<div class="position-relative">
  <section class="u-clearfix u-uploaded-video u-video u-section-4" id="sec-0a5e">
    <div class="u-background-video u-expanded u-video-contain" style="">
      <div class="embed-responsive">
        <video class="embed-responsive-item" data-autoplay="1" loop="" muted="1" autoplay="autoplay" playsinline="">
          <source src="files/maroc3.mp4" type="video/mp4">
          <p>Your browser does not support HTML5 video.</p>
        </video>
      </div>
    </div>
    <div class="u-clearfix u-sheet u-sheet-1"></div>
  </section>
  <div class="position-absolute top-50 start-50 translate-middle">
    <h1 class="display-3 text-white animated slideInDown">Destination</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">Destination</li>
      </ol>
    </nav>
  </div>
</div>
@endsection

@section('contenu')
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Destinations</h6>
      <p class="text-center wow fadeInUp">Le Maroc est un pays magnifique avec des villes qui regorgent de trésors cachés. Les médinas anciennes, les palais somptueux, les jardins luxuriants, les marchés animés et les plages de sable fin sont quelques-unes des merveilles qui vous attendent dans les villes marocaines. Les couleurs, les odeurs, les saveurs et les sons vous transporteront dans un autre monde. Vous pourrez découvrir la richesse culturelle du pays en visitant des lieux historiques, en rencontrant des gens chaleureux et en goûtant une cuisine délicieuse.</p>
    </div>
  </div>
</div>

<!-- Destination Start -->

@foreach($villes as $key => $ville)
<section class="destination-section">
  <div class="destination-container">
    <div class="destination-image">
      <img src="{{ asset('storage/destination_images/' . $ville->image) }}" alt="{{ $ville->nomVille }}">
    </div>
    <div class="destination-description">
      <h2 class="destination-title">{{ $ville->nomVille }}</h2>
      <p class="destination-info">{{ $ville->description }}</p>
      <a href="{{ route('detailsville', $ville->idV) }}" class="btn btn-primary">Learn More</a>
    </div>
  </div>
</section>
@endforeach

{{-- Pagination buttons  --}}

<ul class="pagination">
  @if ($villes->onFirstPage())
    <li class="page-item disabled"><span class="page-link">Previous</span></li>
  @else
    <li class="page-item"><a class="page-link" href="{{ $villes->previousPageUrl() }}">Previous</a></li>
  @endif

  @for ($page = 1; $page <= $villes->lastPage(); $page++)
    @if ($page == $villes->currentPage())
      <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
    @else
      <li class="page-item"><a class="page-link" href="{{ $villes->url($page) }}">{{ $page }}</a></li>
    @endif
  @endfor

  @if ($villes->hasMorePages())
    <li class="page-item"><a class="page-link" href="{{ $villes->nextPageUrl() }}">Next</a></li>
  @else
    <li class="page-item disabled"><span class="page-link">Next</span></li>
  @endif
</ul>






<!-- Destination End -->
@endsection

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
