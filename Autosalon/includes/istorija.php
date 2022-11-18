<?php
    require "header.php";
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleCarInfo.css">
        <link rel="stylesheet" href="istorija.css">
        <title>Istorija</title>
    </head>
<body>
    <img src="https://cdn-ba.audi.at/media/Theme_BannersHome_Banner_Image_Component/26903-banner-296922-image/dh-1380-918e09/477d0edb/1602486175/e-tron-2020-0112-1920x1080-oe.jpg" alt="">

   <div class="istorija">
    <?php
        //audi kljucna rijec
        $audi="audi";
        if($audi){
            //upit za wiki
            $api_url = "https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&titles=".ucwords($audi)."&redirects=true";
            $api_url = str_replace(' ','%20',$api_url);

            if($data = json_decode(@file_get_contents($api_url))){
                foreach($data->query->pages as $key=>$val){
                    $pageId = $key;
                break;
                }
                $content = $data->query->pages->$pageId->extract;

                header('Content-Type:text/html; charset=utf-8');
                //ucitava podatke od wikipedije o kljucnoj rijeci koja je zadana
                echo $content;
            }else{
                echo 'Wikipedia is down...';
            }
        }
    ?>
    </div>
    <img src="https://cdn-ba.audi.at/media/Theme_BannersHome_Banner_Image_Component/26903-banner-296924-image/dh-1380-918e09/d652fd33/1602486175/1920x600-stage-aa1-181001.jpg" alt="">
</body>
</html>

<?php
    require "footer.php";
?>