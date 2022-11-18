<?php
    require "header.php";
?>

<html>
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="styleCarInfo.css">
        <link rel="stylesheet" href="styleregistracija.css">
        <link rel="stylesheet" href="kontakt.css">
        <title>Kontakt</title>
        
    </head>
<body>
    <div class=reg>
    <form action="http://localhost/AutoSalon/includes/korisnikdodat.php" method="post">
        <b>Registrujte se</b>
        <table border="0">
            <tr>
                <td>User Name</td>
                <td align="center"><input type="text" name="username" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td align="center"><input type="password" name="password" size="30" value="" /></td>
            </tr>
            <tr>
                <td>First name</td>
                <td align="center "><input type="text " name="firstname" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td align="center "><input type="text " name="lastname" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Birth date</td>
                <td align="center "><input type="text " name="birthdate" size="30" placeholder="25-05-1998" value="" /></td>
            </tr>
            <tr>
                <td>City</td>
                <td align="center "><input type="text " name="city" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td align="center "><input type="text " name="email" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td align="center "><input type="text " name="phonenumber" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td align="center "><input type="text " name="sex" size="30" placeholder="M or F" maxlength="1" value="" /></td>
            </tr>
            <tr>
                <td>Country</td>
                <td align="center "><input type="text " name="country" size="30" maxlength="3" value="" /></td>
            </tr>
            <tr>
                <td>Street</td>
                <td align="center "><input type="text " name="street" size="30" value="" /></td>
            </tr>
            <tr>
                <td>Zip code</td>
                <td align="center "><input type="text " name="zip" size="30" maxlength="5" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Send" /></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>
<?php
    require "footer.php";
?>