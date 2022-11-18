<?php
    require "header.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleCarInfo.css">
  </head>
  <title>Audi_A6</title>
<body>

<div class="audi_a6-naslov1">
  <img src="https://cdn-ba.audi.at/media/Theme_Banners_Banner_Image_Component/48159-banner-260094-image/dh-1380-918e09/5e111b74/1602487045/audi-galerie-6-oe.jpg" alt="">
  <h1>Doživite napredak, nemojte ga samo osjetiti.
  Novi A6 Limousine.</h1>
  <p>Kada se dizajn spoji s učinkovitošću a sportski duh sa stilom. Kada se ujedine inovacije i preciznost i kada se u svakoj liniji osjeti progresivna elegancija. Kada oblici i funkcije simboliziraju stav a napredak stoji iznad svega. Tada poslovna klasa dobiva novog predvodnika: Audi A6 Limousine. Snažniji nego ikada prije. Suveren kao uvijek.</p>
</div>
<div class="audi_a6-naslov2">
  <h2>Audi A6 Limousine multimedijska galerija</h2>
</div>

<!--Galerija -->
<div class="container">

  
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/48160-408942_56572-image/dh-1101-ddf998/69e83a86/1602615140/audi-galerie-3-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/48160-408942_56571-image/dh-1101-ddf998/090ff71d/1602587198/audi-galerie-2-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/48160-408942_56574-image/dh-1101-ddf998/9d95a852/1602579597/audi-galerie-5-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/48160-408942_56573-image/dh-1076-ddf998/89872f27/1602516957/audi-galerie-4-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/48160-408942_56575-image/dh-1101-ddf998/57713476/1602515088/audi-galerie-6-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/48160-408942_56570-image/dh-1101-ddf998/60b17973/1602502517/audi-galerie-1-oe.jpg">
  </div>

  <!-- Dugmad -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail Slike -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/48160-408942_56572-image-xsmall/dh-292-b05066/f2b6b196/1602487860/audi-galerie-3-oe.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/48160-408942_56571-image-xsmall/dh-292-b05066/b32ff21e/1602487860/audi-galerie-2-oe.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/48160-408942_56574-image-xsmall/dh-292-b05066/763ea169/1602487861/audi-galerie-5-oe.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/48160-408942_56573-image-xsmall/dh-292-b05066/88a52687/1602487860/audi-galerie-4-oe.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/48160-408942_56575-image-xsmall/dh-292-b05066/9980da43/1602487861/audi-galerie-6-oe.jpg" style="width:100%" onclick="currentSlide(5)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Small_Component/48160-408942_56570-image-small/dh-464-022074/eb5ce60c/1602487860/audi-galerie-1-oe.jpg" style="width:100%" onclick="currentSlide(6)" >
    </div>
  </div>
</div>

<div class="audi_a6-video1">
  <h2>Jasan stav.
  Iz svake perspektive.</h2>
  <br>
  <p>Od proširene singleframe rešetke hladnjaka preko bočnih otvora za zrak sa sportskim kromiranim okvirima pa sve do uskih glavnih svjetala - prednji dio Audija A6 Limousine na prvi pogled oduševljava progresivnim dizajnom. Oštriji bočni dio sa snažnim proširenjima iznad kućišta kotača naglašava "qutattro" gene. Vanjska zrcala smještena na gornjem dijelu vrata djeluju izrazito sportski. I linija krova koja podsjeća na coupé modele završava elegantno na stražnjem dijelu trodimenzionalnog dizajna s karakterističnim aluminijskim okvirom.</p>
  <br>
  <iframe width="853" height="480" src="https://www.youtube.com/embed/dWEueqpS74g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<br>
<br>
<div class="audi_a6-naslov3">
<h2>Vizionarska snaga osvjetljenja. Izražajan pogled.</h2>
<p>Opcijska HD Matrix LED prednja svjetla s dinamičnim pokazivačima smjera oduševljavaju na dva načina. Vozaču nude optimalno osvjetljenje ceste, a da pritom ne zasljepljuju vozila koja dolaze u susret. A zbog svjetala s karakterističnim svjetlosnim segmentima, čiji je fokus pomaknut prema van, Audi A6 Limousine djeluje još šire.</p>
<br>
<iframe width="853" height="480" src="https://www.youtube.com/embed/Va2B95r5ttQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="audi_a6-naslov4">
  <div class="column1">
  <iframe width="650" height="480" src="https://www.youtube.com/embed/YH1xMDX_rxU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="column1">
  <h2>Za dobro raspoloženje</h2>
  <br>
  <p>Opcijski ambijentalni paket svjetala za osvjetljenje pojedinih kontura u unutrašnjosti stvara jedinstvenu atmosferu i u interijeru Audija A6 Limousine formira fascinantan ambijent u kojem ćete se sigurno osjećati dobro. Precizni svjetlosni vodiči naglašavaju instrumentnu ploču, središnju konzolu i druge markantne strukture dizajna u 30 različitih tonova boje uz nestupnjevito prigušenje jačine osvjetljenja.</p>
  </div>
</div>
<br>
<br>
<div class="audi_a6-naslov5">
<img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/48160-408954-image/dh-1243-d8ec43/48924a3c/1602487861/2018-02-28-10h06-44.jpg" alt="">
</div>
<br>
<br>
<br>
<div class="audi_a6-naslov6">
<h2>Inteligencija, inteligentna primjena</h2>
<p>Budućnost je tu i sada: spoj savršeno usklađenih senzora, kamera i algoritama prepoznaje i procjenjuje trenutačnu situaciju u vožnji, asistira kada to želite i intervenira kada više ne ide drugačije. Pratite nas na putu u doživljaj autonomne vožnje, kao biste se već sutra vozili tim putem.</p>
<br>
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/o_UNPQOYRA4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="audi_a6-naslov6">
<br>
<br>
<br>
  <h2>Uvijek u prednosti za jednu generaciju.
  Već osam generacija.</h2>
  <p>Predstaviti inovacije na vizionarski način. Ostvariti digitalizaciju - vizionarskom koncepcijom rukovanja, širokom umreženošću i velikom ponudom sustava potpore za vozača. Za više sigurnosti. Više komfora. I za nova mjerila u višoj klasi vozila. To su naša očekivanja. To je naša strast. To je osma generacija Audija A6 Limousine.</p>
  <br>
  <img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/48160-408962-image/dh-1380-d8ec43/62c314a8/1602487861/audi-galerie-7.jpg" alt="">
</div>



</body>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

</html>
<?php
    require "footer.php";
?>