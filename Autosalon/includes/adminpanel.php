<?php
    require "header.php";
?>
<html>
<head>
        <title>Admin panel</title>
        <link rel="stylesheet" href="styleAdminPanel.css">
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleCarInfo.css">
        <link rel="stylesheet" href="styleCarInfo2.css">
        <link rel="stylesheet" href="styleAdminPanel.css">
</head>
<body>
<div class="gif">
        <img alt="Anonymous transparent GIF - Find on GIFER" class="n3VNCb" src="https://i.gifer.com/WczY.gif" data-noaft="1" jsname="HiaYvf" jsaction="load:XAeZkd;" style="width: 244px; height: 226px; margin: 0px;">
    </div>
    <table class="admin-tabla">
       <tr>
            <td>
                <?php
                require 'getkorisnikinfo.php';
                ?>
            </td> 
        </tr>           
    </table>
    <div class="delete-forma">
            <form action="http://localhost/AutoSalon/includes/deletekorisnikinfo.php" method="POST">
                <h4>Unesite ID naloga kojeg zelite da uklonite</h4>
                    User:<input type="text" name="ID">

                <input type="submit" name="submit" value="Izbrisi">
            
            </form>
        </div>
    <div class="update-forma">
            <form action="http://localhost/AutoSalon/includes/updateKorisnikInfo.php" method="POST">
                <h4>Unesite ID naloga kojeg zelite da Update</h4>
                    User ID:<input type="text" name="ID">
                    <label for="cars">Izaberite sta zelite da izmjenite</label>

                <select name="Opcija">
                    <option value="first_name">First Name</option>
                    <option value="last_name">Last Name</option>
                    <option value="email">Email</option>
                    <option value="street">Street</option>
                    <option value="city">City</option>
                    <option value="state">State</option>
                    <option value="zip">Zip</option>
                    <option value="phone">Phone</option>
                    <option value="birth_date">Birth Date</option>
                    <option value="sex">Sex</option>
                    <option value="password">Password</option>
                    <option value="username">Username</option>
                </select>
                    Input<input type="text" name="Polje">
                    <input type="submit" name="submit" value="Update">
            
            </form>
        </div>
    </body>
</html>
<?php
    require "footer.php";
?>