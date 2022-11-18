<?php
    require "header.php";
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleCarInfo.css">
        
        <link rel="stylesheet" href="kontakt.css">
        <title>Kontakt</title>
        
    </head>
<body>
    <div class="googlemap">
    <?php
    require "googlemap.php";
    ?>
    </div>
    <div class="porse-box">
        <p>Address: Salon vozila i servis, Bulevar Meše Selimovića 16, Sarajevo 71000</p>
        <pre>Hours: četvrtak 08–18
       petak 08–18
       subota 08–12
       nedjelja<span class="closed-crveno"> Zatvoreno</span>
       ponedjeljak 08–18
       utorak 08–18
       srijeda 08–18</pre>
        <p>Products and Services: <a href="https://audi.ba" target="_blank">www.audi.ba</a></p>
        <p>Phone:<a href="https://www.google.com/search?q=porsche+sarajevo&spell=1&sa=X&ved=2ahUKEwiC-8So7cjsAhWailwKHfO2ASsQBSgAegQIBRAs&biw=1366&bih=657#"> 033 771-200</a></p>        
    </div>
    <div class="kontak-footer-slika">
    <img src="https://asset-cdn.campaignbrief.com/wp-content/uploads/2019/09/30104515/AUDI-S_Scary-Beautiful_DOOH_-desktop-copy.jpg" alt="">
    </div>
</body>
</html>

<?php
    require "footer.php";
?>