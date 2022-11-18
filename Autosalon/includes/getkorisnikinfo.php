<?php

require_once('mysqli_connect.php');

$query="SELECT* FROM korisnik";

$response = @mysqli_query($dbc, $query);

if($response){

    echo '<table align="left" cellspacing="5" cellpadding="8" border="solid 5px #CD5C5C">
    
<tr><td align="left"><b>First Name</b></td>
    <td align="left"><b>Last Name</b></td>
    <td align="left"><b>Email</b></td>
    <td align="left"><b>Street</b></td>
    <td align="left"><b>City</b></td>
    <td align="left"><b>State</b></td>
    <td align="left"><b>Zip</b></td>
    <td align="left"><b>Phone</b></td>
    <td align="left"><b>Birth Date</b></td>
    <td align="left"><b>Sex</b></td>
    <td align="left"><b>Date</b></td>
    <td align="left"><b>Korisnik ID</b></td>
    <td align="left"><b>Password</b></td>
    <td align="left"><b>Username</b></td></tr>';

    while($row = mysqli_fetch_array($response)){
        echo '<tr><td align="left">' .
        $row['first_name'] . '</td><td align="left">' . 
        $row['last_name'] . '</td><td align="left">' . 
        $row['email'] . '</td><td align="left">' . 
        $row['street'] . '</td><td align="left">' . 
        $row['city'] . '</td><td align="left">' . 
        $row['state'] . '</td><td align="left">' . 
        $row['zip'] . '</td><td align="left">' . 
        $row['phone'] . '</td><td align="left">' . 
        $row['birth_date'] . '</td><td align="left">' . 
        $row['sex'] . '</td><td align="left">' . 
        $row['date_entered'] . '</td><td align="left">' . 
        $row['korisnik_id'] . '</td><td align="left">' . 
        $row['password'] . '</td><td align="left">' . 
        $row['username'] . '</td><td align="left">';
        
        echo '</tr>';

    }

    echo'</table>';
}else{

    echo "Couldn't issue database query";

    echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>