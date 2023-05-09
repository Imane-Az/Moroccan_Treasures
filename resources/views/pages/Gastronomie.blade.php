<!DOCTYPE html>
<html>
<title>Gastronomie</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
div.relative {
  position: relative;
  width: 400px;
  height: 200px;
  border: 3px solid #73AD21;
}

div.absolute {
  position: absolute;
  background-color: rgb(255, 255, 255)
  top: 80px;
  right: 50px;
  width: 200px;
  height: 100px;
  border: 3px solid #73AD21;
}
</style>
<body>

   <nav> <h1>Bienvenue au maroc</h1></nav>
   <fieldset>
    <p>
        La cuisine marocaine est une cuisine méditerranéenne caractérisée par sa variété de plats issus principalement de la cuisine berbère
        ,avec des influences arabes, juives et andalouses.
        elle reflète l'histoire du pays et les différentes populations qui s'y sont installées.
    </p>
</fieldset>

    <div class="relative">
        <img  src="lesplats/briwates" alt="rela"/>
      <div class="absolute">
        <h2><i>Briouatest</i></h2>
        <p>
            Généralement servies en début des repas, les entrées marocaines sont présentées comme accompagnement d'un plat principal.
             Elles diffèrent d'une région à une autre, mais se composent généralement
             d'une salade marocaine de légumes crus ou cuits, des Briouates farcies au poulet ou à la viande hachée,
              d'une ratatouille de poivrons et de tomates que nous appelons Tektouta et du fameux Zaâlouk qui est une purée d'aubergines.
             Elles peuvent être assaisonnées différemment, mais chaque recette apporte sa propre saveur et sa propre couleur.
        </p>
      </div>
    </div>

    <div class="relative">
        <img  src="lesplats/The.jpg" alt="rela"/>
      <div class="absolute">
        <h2><i>Thé *Attia* </i></h2>
        <p>
            Quintessence même de l'hospitalité marocaine,
             le thé vert à la menthe est un breuvage cérémonial ancré dans les traditions marocaines.
              En ville comme en campagne, il est servi dans un petit verre coloré,
               en le versant traditionnellement d'un mètre de haut.
               Le thé à la menthe permet souvent de souhaiter la bienvenue aux hôtes, dans un cadre convivial.
        </p>
      </div>
    </div>
    <div class="relative">
        <img  src="lesplats/harira.jpg" alt="rela"/>
      <div class="absolute">
        <h2><i>Harira Marocaine</i></h2>
        <p>
            La Harira est une soupe traditionnelle marocaine souvent préparée pendant le mois sacré du Ramadan,
             mais elle peut être dégustée tout au long de l'année. Elle est préparée avec des lentilles,
             des pois chiches, de la viande, des légumes et des épices telles que le cumin, le gingembre, le paprika et le safran.
        </p>
      </div>
    </div>

    <div class="relative">
        <img  src="lesplats/couscous.jpg" alt="rela"/>
      <div class="absolute">
        <h2><i> Couscous Marocaine</i></h2>
        <p>
            Le couscous est un plat emblématique de la cuisine marocaine, très apprécié à travers le monde.
             Il est préparé avec de la semoule de blé dur, de la viande (généralement de l'agneau, du poulet ou du bœuf),
              des légumes (comme des carottes, des courgettes et des navets)
             et des épices (comme le cumin, le curcuma, le gingembre et le poivre).
        </p>
      </div>
    </div>

    <div class="relative">
        <img  src="lesplats/rfissa.jpg" alt="rela"/>
      <div class="absolute">
        <h2><i>Rfissa </i></h2>
        <p>
            La Rfissa est un plat traditionnel marocain originaire de la région de Fès,
            souvent préparé pour les occasions spéciales telles que les mariages et les fêtes.
             Il est préparé avec des oignons caramélisés, du poulet, des lentilles, des épices (comme le curcuma, le gingembre,
              le safran et le poivre noir) et du msemen (une sorte de pain feuilleté marocain).
             Les ingrédients sont cuits lentement dans une sauce savoureuse jusqu'à ce qu'ils soient tendres et imprégnés de saveurs.
              La Rfissa est servie dans un grand plat familial, avec le msemen coupé en morceaux et disposé autour du poulet et des lentilles.
             C'est un plat généreux et réconfortant qui symbolise l'hospitalité marocaine et qui est souvent partagé en famille ou entre amis.
        </p>
      </div>
    </div>



<div class="w3-container">
  <h2>tesst</h2>
  <p> border</p>
</div>

<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="lesplats/harira.jpg" style="width:100%">

  <img class="mySlides" src="lesplats/briwates.jpg" style="width:100%">
  <img class="mySlides" src="lesplats/couscous1.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>


  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>



