var images = [
    "url(/picutres/homepage/pic1.jpg)",
    "url(/picutres/homepage/pic3.jpg)",
    "url(/picutres/homepage/pic4.jpg)"
  ];
  
  var currentImageIndex = 0;
  var heroImage = document.querySelector(".hero-image");
  
  setInterval(function() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    heroImage.style.backgroundImage = images[currentImageIndex];
  }, 5000);
  