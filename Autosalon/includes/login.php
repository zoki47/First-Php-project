<?php
if(isset($_POST['login-submit'])){

    require 'mysqli_connect.php';

    $userName = $_POST['username']; //ubacuje input polja u $userName i $password
    $password = $_POST['pwd'];

    if(empty($userName) || empty($password)){ //provjera da li su polja za input prazna

    header("Location: ../index.php?error=emptyfields");
    exit();
    }else{
        $sql = "SELECT * FROM korisnik WHERE username=?;";
        $stmt = mysqli_stmt_init($dbc);  //$dbc oznacava konekciju za bazu
        if(!mysqli_stmt_prepare($stmt,$sql)){  //provjerava da li stmt radi sa bazom 
            header("Location: ../index.php?error=sqlerror");
            exit(); 
        }else{

            mysqli_stmt_bind_param($stmt, "s", $userName); 
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['password']);//projvera input sa hashom iz baze
                if($pwdCheck == false){ //provjerava da li password tacan
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }else if($pwdCheck == true){
                    session_start();   // u koliko je password tacan pocinje sesiju i cuva userId i userUid 
                    $_SESSION['userId'] = $row['korisnik_id'];
                    $_SESSION['userUid'] = $row['username'];

                    header("Location: ../index.php?login=success");
                    exit();
                }else{
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
            }else{
            header("Location: ../index.php?error=nouser");
            exit();  
            }
        }
    }
}else{
    header("Location: ../index.php");
    exit();
}