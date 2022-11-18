<?php
    require "includes/header.php";
?>
        <main>
        <div class="wrapper-main">
            <section class="section-default">
               <?php
               if(isset($_SESSION['userId'])){
                    echo '<p class="login-status">Ulogovani ste!</p>';
                    require "includes/automobili.php";
               }else{
                   echo'<p class="login-status">Da bi ste vidjeli ostali asortiman novih vozila molimo vas da se ulogujete!</p>';
               }
               ?>
            </section>
        </div>
    </main>




<?php
    require "includes/footer.php";
?>