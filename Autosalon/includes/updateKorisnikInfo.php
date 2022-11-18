<?php    
    require_once('mysqli_connect.php');
    #upit ako se ispuni uslov 
    if(isset($_POST['submit'])){
        if(!empty($_POST['Opcija'])) {
            
            $ID= $_POST['ID'];
            $Opcija= $_POST['Opcija'];
            $Polje =$_POST['Polje'];
            #komanda za update u sql
            $sql = "UPDATE `korisnik` SET $Opcija='$Polje'  WHERE korisnik_id= $ID";
            if(mysqli_query($dbc, $sql)){
                header("Location: http://localhost/Autosalon/includes/adminpanel.php?error=$Opcija _je_izmjenjeno");
            }else{
                header("Location: http://localhost/Autosalon/includes/adminpanel.php?error=$Opcija _nije_izmjenjeno");
                
            }
        }
    }
    mysqli_close($dbc);
?>