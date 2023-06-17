<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/destinations/details.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <style>
    /* Add your custom styles here */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .destination-details {
      background-color: #f1f1f1;
      padding: 50px;
      text-align: center;
    }
    
    .hero-image {
      height: 400px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    
    .destination-info {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .destination-title {
      font-size: 40px;
      margin-bottom: 20px;
    }
    
    .destination-description {
      font-size: 18px;
    }

    /* Activities css */

    h5{
      font-size: 24px;
      font-weight: bold;
      font-family: 'Arial', sans-serif;
    }
    .card {
      margin-bottom: 20px;
      border-radius: 10px;
    }
    .card-body {
      max-height: 200px;
      overflow: hidden;
    }
    .card-img-top {
      max-height: 350px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="destination-details">
    <div class="hero-image" style="background-image: url('{{ asset('storage/destination_images/' . $ville->image) }}')"></div>
    <div class="destination-info">
      <h2 class="destination-title">{{ $ville->nomVille }}</h2>
      <p class="destination-description">{{ $ville->description }}</p>
    </div>
    <a href="{{ route('destinations') }}" class="btn btn-primary">Go Back</a>
  </div>
 

  <div class="container">
    <h5 class="pb-1 mb-4 text-center">Activities</h5>
    <div class="row">
      @foreach ($activities as $activity)
      <div class="col-md-4">
        <div class="card rounded">
          <img src="{{ asset('storage/activity_images/' . $activity->image) }}" class="card-img-top" alt="{{ $activity->Titre }}">
          <div class="card-body">
            <h5 class="card-title">{{ $activity->Titre }}</h5>
            <p class="card-text">{{ $activity->Information }}</p>
            <p class="card-text"><small class="text-muted">{{ $activity->Type }}</small></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
