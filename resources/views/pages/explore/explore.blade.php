
@extends('components.template1')


@section('style')
<link rel="stylesheet" type="text/css" href="css/explore/explore.css">
@endsection

    <!-- Navbar & Hero Start -->

    @section('hero')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                      <h1 class="mb-6">Bienvenue au <span class="text-primary">Maroc</span></h1>
                      <p class="mb-6"><i>let's explore the beauty of Morocco together </i></p>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    <!-- Navbar & Hero End -->

    @section('contenu')


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="container my-4 text-center">
                <h2 class="text-primary">La Culture Marocaine</h2>
                <p class="text-muted"> Le Maroc est un pays où l'histoire est omniprésente et où les différentes civilisations qui l'ont traversé ont laissé leur empreinte. Les Berbères, les Phéniciens, les Carthaginois, les Romains, les Arabo-musulmans et les Andalous ont tous laissé leur marque sur le paysage culturel marocain, contribuant à en faire un héritage riche et diversifié. Chaque région du Maroc possède ses particularités culturelles propres, renforçant ainsi la diversité culturelle du pays. Que ce soit dans les musées, les villes anciennes, les monuments historiques ou les festivals, le Maroc est un pays qui offre une plongée fascinante dans son patrimoine culturel&nbsp;millénaire.</p>
             </div>
        </div>
            <div class="fun-facts">
                <div class="container">
                  <div class="more-info-content">
                    {{-- <div class="row"> --}}
                      {{-- <div class="col-md-6">
                        <div class="left-image">
                          <img src="images/explore/archi7.jpg" class="img-fluid" alt="">
                        </div>
                      </div> --}}
                      {{-- <div class="col-md-6 align-self-center"> --}}
                        <div class="right-content">
                          <h2>Architecture <em>marocaine</em></h2>
                          <p>La première caractéristique du Maroc est son art architectural. Raffinée et ornementale, l'architecture marocaine reflète une histoire pleine de rebondissements des villes impériales. Vous aurez l'occasion de contempler les fortifications de Taroudant, de Marrakech, de Fès et de Meknès lors de votre séjour. L'architecture marocaine s'est bâtie à l'issue de conflits successifs et de rivalités générationnelles.</p>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
            </div>
            
            {{-- moroccan food part --}}
            <br/><br/><br/><br/>
 
            {{-- introduction --}}
            <div class="container">
              <div class="container my-4 text-center">
                  <h2 class="text-primary">La Cuisine Marocaine</h2>
                  <p class="text-muted"> La cuisine marocaine est le résultat d'un mélange d'influences berbères, arabes, méditerranéennes, juives et asiatiques. Elle reflète l'histoire du pays et les différentes populations qui s'y sont installées. Les plats emblématiques tels que le tajine, le couscous et la pastilla sont le fruit de ces influences variées. Les épices, les fruits secs, les herbes aromatiques et les agrumes ajoutent une explosion de saveurs à chaque recette. La cuisine marocaine est reconnue pour sa richesse et sa diversité, et a été classée deuxième meilleure cuisine au monde. C'est une expérience culinaire unique qui transporte les papilles dans un voyage des sens.</p>
               </div>
          </div>
           
            <br/> <br/><br/><br/>
            {{-- display of images --}}
            
            <div class="blocks-container"> 
              <div class="container">
                <img src="lesplats/tajine.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Tajine</div>
                </div>
              </div>
              <div class="container">
                <img src="lesplats/tea2.jpg" alt="Avatar" class="image overlay" >
                <div >
                  <div class="text-showup">Mint tea</div>
                </div>
              </div>
              <div class="container">
                <img src="lesplats/couscous.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Couscous</div>
                </div>
              </div>
              <div class="container">
                <img src="lesplats/harira.jpg" alt="Avatar" class="image overlay">
                <div>
                  <div class="text-showup">Harira</div>
                </div>
              </div>
              <div class="container">
                <img src="lesplats/pastilla.jpg" alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">Pastilla</div>
                </div>
              </div>
              <div class="container">
                <img src="lesplats/pastries.jpg" alt="Avatar" class="image overlay">
                <div>
                  <div class="text-showup">Pastries</div>
                </div>
              </div>
            </div>

 
           
            
            
    </div>
   
    

@endsection
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    {{-- added scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>
