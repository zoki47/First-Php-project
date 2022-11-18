<?php
    require "header.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleCarInfo.css">
    <link rel="stylesheet" href="styleCarInfo2.css">
  </head>
  <title>Audi_Q5</title>
<body>

<div class="audi_q5-naslov1">
  <img src="https://cdn-ba.audi.at/media/Theme_Banners_Banner_Image_Component/29937-banner-144933-image/dh-1380-918e09/e2771f79/1602486571/1920x1080-aq5-161007-oe.jpg" alt="">
  <h1>Spreman za svaki trenutak.
  Novi Audi Q5.</h1>
  <p>Nemojte ništa prepustiti slučaju. Bez obzira je li riječ o udobnosti, stilu ili dinamici: Audi Q5 oduševljava već od prvog trenutka. Nastup mu je izražajan, pogon snažan, tehnologije revolucionarne. A vaše su mogućnosti svestrane. Svaki dan iznova - sa novim Audi Q5.</p>
</div>

<div class="audi_q5-naslov2">
  <h2>Audi Q5 multimedijalna galerija</h2>
</div>

<!--Galerija -->
<div class="container">

  
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/29938-220752_34128-image/dh-1101-ddf998/a54225c6/1602502877/1920x1080-sh5666-f20-s050-tcmp01-v004-1001-extend-sru-v004.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/29938-220752_34127-image/dh-1101-ddf998/da2c1aa7/1602487247/1920x1080-sh5611-f20-s010-tcmp01-v008-1050-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/29938-220752_34130-image/dh-1101-ddf998/76f4a2d5/1602502766/1920x1080-160926-audi-q5-motiv06.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/29938-220752_34129-image/dh-1101-ddf998/568f68f1/1602488157/1920x1080-sh5618-f20-s030-tcmp01-v001-1001-rv-v014-previewmotion.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_Component/29938-220752_34131-image/dh-1101-ddf998/115cdde0/1602488505/1920x1080-aq5-161006-oe.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="https://cdn-ba.audi.at/media/Model_Gallery_DetailVideo_Video_PreviewImage_Component/29938-220752_34126-video-previewImage/dh-1180-714db4/7fc5bd47/1602569987/screenshot-82.jpg">
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
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/29938-220752_34128-image-xsmall/dh-292-b05066/266786a1/1602487251/1920x1080-sh5666-f20-s050-tcmp01-v004-1001-extend-sru-v004.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/29938-220752_34127-image-xsmall/dh-292-b05066/7834b62f/1602487251/1920x1080-sh5611-f20-s010-tcmp01-v008-1050-oe.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/29938-220752_34130-image-xsmall/dh-292-b05066/6da5c739/1602487251/1920x1080-160926-audi-q5-motiv06.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/29938-220752_34129-image-xsmall/dh-292-b05066/61eb1c6c/1602487251/1920x1080-sh5618-f20-s030-tcmp01-v001-1001-rv-v014-previewmotion.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailImage_Image_XSmall_Component/29938-220752_34131-image-xsmall/dh-292-b05066/a78c2487/1602487251/1920x1080-aq5-161006-oe.jpg" style="width:100%" onclick="currentSlide(5)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://cdn-ba.audi.at/media/Model_Gallery_DetailVideo_Video_PreviewImage_Small_Component/29938-220752_34126-video-previewImage-small/dh-568-022074/f20426ae/1602487251/screenshot-82.jpg" style="width:100%" onclick="currentSlide(6)" >
    </div>
  </div>
</div>

<div class="audi_q5-naslov3">
  <div class="column1">
    <h2>Karakteristike novog Audi Q5.</h2>
    <h4 class="graynaslov">Stvoren da pokreće.</h4>
    <br>
    <img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/29938-220754-144939-220757-image/dh-480-d8ec43/5b280589/1602487251/1920x1080-sh5618-f20-s030-tcmp01-v001-1001-rv-v014-previewmotion.jpg" alt="">
    <p>Svaki detalj Audija Q5 odiše karakterističnim Q dizajnom te utjelovljuje dinamiku i suverenost, kao što su markantan poklopac motora ili ravno padajuće krovne linije, vanjski retrovizori postavljeni na liniju ramena te uske linije prozora.</p>
    <br>
    <h4 class="graynaslov">Sve u vidnom polju.</h4>
    <img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/29938-220754-144939-220760-image/dh-480-d8ec43/5717bad5/1602487251/1920x1080-aq5-d-161007.jpg" alt="">
    <br>
    <p>S opcijskim Audi virtualnim kokpitom napredak će postati vidljiv. Potpuno digitalni kombinirani instrument s 12,3" zaslonom visoke razlučivosti u boji prikazuje brojne informacije relevantne za vozača. Od brzine i navigacijskog sustava sve do komunikacije - možete odabrati među raznim mogućnostima prikaza. Veliki, elegantni 8,3" zaslon u boji opcijskoga MMI navigacijskog sustava plus oduševljava svojom preglednošću i jednostavnim načelom rukovanja.</p>
  </div>
  <div class="column1">
    <h4 class="graynaslov">Audi Matrix LED-glavna svjetla</h4>
    <img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/29938-220754-144940-220763-image/dh-480-d8ec43/f04a2561/1602487252/1920x1080-sh5612-f20-s020-tcmp01-v009-1041.jpg" alt="">
    <br>
    <p>Audi Q5 već izdaleka oduševljava svojim opcijskim Audi Matrix LED glavnim svjetlima. LED svjetla za dnevnu vožnju su jedinstvena. Dinamični pokazivači smjera ne mogu se previdjeti. Kamera koja unutar granica sustava prepoznaje vozila koja se nalaze ispred vlastitog ili dolaze iz suprotnog smjera je nezamjenjiva. Glavna se svjetla u tren oka prilagođavaju svakoj situaciji, a uz njih će napredak biti jasno vidljiv.</p>
    <br>
    <h4 class="graynaslov">Pogon i ovjes</h4>
    <img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/29938-220754-144940-220766-image/dh-480-d8ec43/b7223b22/1602487252/1920x1080-aq5-161004-oe.jpg" alt="">
    <br>
    <p>Spreman za gotovo svaki teren - i izazove budućnosti: otkrijte pogon na sve točkove quattro, koji u 4-cilindarskim modelima povezuje učinkovitost i sigurnost zahvaljujući novoj ultra tehnologiji. Opcijski zračni ovjes istovremeno prilagođava amortizacijsku silu svakog kotača određenomu terenu i stilu vožnje.</p>
    <br>
    <h4 class="graynaslov">Audi Q5 unutrašnjost</h4>
    <img src="https://cdn-ba.audi.at/media/TextImage_ImageEnlarge_Component/29938-220754-144940-220769-image/dh-480-d8ec43/29bc90b0/1602487252/1920x1080-aq5-d-161012.jpg" alt="">
    <br>
    <p>Unutrašnjost novog Audija Q5 usmjerena je na vozača i nudi pregršt prostora za individualnost zahvaljujući povećanom međuosovinskom razmaku. Od kvalitetnih materijala poput opcijske kože Feinnappa preko istaknutih boja do osvjetljenja, na raspolaganju vam stoje brojni detalji. U tami će opcijski paket ambijentalnog osvjetljenja postavljati akcente zahvaljujući izboru od 30 različitih boja. Osvjetljavat će čak i ukrasne letve u instrumentnoj ploči.</p>
  </div>
</div>

<div class="audi_q5-naslov3">
  <img src="https://cdn-ba.audi.at/media/Theme_Banners_Banner_Image_Component/29937-banner-144934-image/dh-1380-918e09/e73f07e7/1602486571/1920x1080-aq5-161008-ohne-illu-oe.jpg" alt="">
</div >

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