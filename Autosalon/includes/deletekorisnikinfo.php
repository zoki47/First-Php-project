   <?php    
       require_once('mysqli_connect.php');
        #upit ako se ispuni uslov 
        if(isset($_POST['submit'])){
            $ID = $_POST['ID'];
            #komanda za brisanje u sql
            $sql = "DELETE FROM korisnik WHERE korisnik_ID=$ID";
           if(mysqli_query($dbc, $sql)){
            header("Location: http://localhost/Autosalon/includes/adminpanel.php?error=Korisnik_je_obrisan");
        }else{
            header("Location: http://localhost/Autosalon/includes/adminpanel.php?error=Korisnik_nije_obrisan");
        }
    }
    mysqli_close($dbc);
    ?>
    
