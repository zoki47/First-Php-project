<?php
session_start();
error_reporting(0);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="includes/style.css">
        <link rel="stylesheet" href="includes/styleCarInfo.css">
        <link rel="stylesheet" href="includes/styleCarInfo2.css">
        <link rel="stylesheet" href="styleAdminPanel.css">
        <title>
        </title>
    </head>
    <body>
    <img  src="https://d2lr1b3k157z4z.cloudfront.net/wp-content/uploads/2018/10/06113611/Audi-Banner-1.jpg" style="width:100%;">
        <header>
            <!--Uraditi css pratiti klase-->
               <nav class="nav-header-main">
              
                <ul class="menu">
                    <li><a href="http://localhost/Autosalon/index.php">Pocetna</a></li>
                    <li><a href="http://localhost/Autosalon/includes/istorija.php">Istorija</a></li>
                    <li><a href="http://localhost/Autosalon/includes/kontakt.php">Kontakt</a></li>
                    <li><a href="http://localhost/Autosalon/includes/registracija.php">Registracija</a></li>
                    <?php
                    #u koliko je admin ulogovan koji jedini ima id 10 
                    if($_SESSION['userId']=='10'){
                        echo '<li><a href="http://localhost/Autosalon/includes/adminpanel.php">Admin Panel</a></li>';
                    }
                    ?>
                    <li><div class="header-login">
                    <?php
                        if(isset($_SESSION['userId'])){
                            echo  '<form action="includes/logout.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button></form>';
                          }else{
                            echo  '<form action="includes/login.php" method="post">
                            <input type="text" name="username" placeholder="username">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="login-submit">Login</button></form>';
                             }
                    ?>
                    </li>
                </ul>
                </div>
            </nav>
        </header>
   </body>
</html>