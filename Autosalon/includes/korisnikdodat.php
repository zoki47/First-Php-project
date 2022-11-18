<html>
    <body>
    <?php

    if(isset($_POST['submit'])){
        
        $data_missing = array();

        if(empty($_POST['username'])){
            //dodaje username u niz
            $data_missing[] = 'User Name';
        }else{
            //trimaju razmak od username i pohranjuje username
            $username = trim($_POST['username']);

        }

        if(empty($_POST['password'])){
            //dodaje password u niz
            $data_missing[] = 'Password';
        }else{
            //trimaju razmak od passworda i pohranjuje password
            $password = trim($_POST['password']);

        }

        if(empty($_POST['firstname'])){
            //dodaje ime u niz
            $data_missing[] = 'First Name';
        }else{
            //trimaju razmak od imena i pohranjuje ime
            $f_name = trim($_POST['firstname']);

        }
        if(empty($_POST['lastname'])){
            //dodaje ime u niz
            $data_missing[] = 'Last Name';
        }else{
            //trimaju razmak od imena i pohranjuje ime
            $l_name = trim($_POST['lastname']);

        }

        if(empty($_POST['birthdate'])){
            //dodaje datum u niz
            $data_missing[] = 'Birth Date';
        }else{
            //trimaju razmak od datum i pohranjuje datum
            $birth_date = trim($_POST['birthdate']);

        }

        if(empty($_POST['city'])){
            //dodaje city u niz
            $data_missing[] = 'City';
        }else{
            //trimaju razmak od city i pohranjuje city
            $city = trim($_POST['city']);

        }

        if(empty($_POST['email'])){
            //dodaje email u niz
            $data_missing[] = 'Email';
        }else{
            //trimaju razmak od email i pohranjuje email
            $email = trim($_POST['email']);

        }

        if(empty($_POST['phonenumber'])){
            //dodaje phone u niz
            $data_missing[] = 'Phone';
        }else{
            //trimaju razmak od phone i pohranjuje phone
            $phone = trim($_POST['phonenumber']);

        }

        if(empty($_POST['sex'])){
            //dodaje sex u niz
            $data_missing[] = 'Sex';
        }else{
            //trimaju razmak od sex i pohranjuje sex
            $sex = trim($_POST['sex']);

        }

        if(empty($_POST['country'])){
            //dodaje country u niz
            $data_missing[] = 'Country';
        }else{
            //trimaju razmak od country i pohranjuje country
            $country = trim($_POST['country']);

        }

        if(empty($_POST['street'])){
            //dodaje street u niz
            $data_missing[] = 'Street';
        }else{
            //trimaju razmak od street i pohranjuje street
            $street = trim($_POST['street']);

        }

        if(empty($_POST['zip'])){
            //dodaje zip u niz
            $data_missing[] = 'Zip Code';
        }else{
            //trimaju razmak od zip i pohranjuje zip
            $zip = trim($_POST['zip']);

        }

        if(empty($data_missing)){

            require_once('mysqli_connect.php');

            $query = "INSERT INTO korisnik (first_name, last_name, email, street, city, state, zip, phone, birth_date, sex, date_entered, korisnik_id, password, username) 
            Values(?,?,?,?,?,?,?,?,?,?, NOW(), NULL,?,?)";

            $stmt = mysqli_prepare($dbc, $query);

            $hashpwd= password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssssssisssss", $f_name, $l_name, $email, $street, $city, $country, $zip, $phone, $birth_date, $sex, $hashpwd, $username);

            mysqli_stmt_execute($stmt);

            $affected_rows = mysqli_stmt_affected_rows($stmt);

            if($affected_rows == 1){

                echo 'Korisnik registrovan';

                mysqli_stmt_close($stmt);
                
                mysqli_close($dbc);
            }else{

                echo 'Error Occurred<br />';
                echo mysqli_error();



            }
        } else{

            echo 'Morate unijeti sledece parametre<br />';

            foreach($data_missing as $missing){

                echo'$missing<br />';
            }
        }
    }

    ?>
    <?php
    require "D:\xamp\htdocs\AutoSalon/index.php";
    ?>
    </body>
</html>