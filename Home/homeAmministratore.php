<?php
session_start();
    if(isset($_SESSION['login'])){
        if($_SESSION['login']!=true){
            echo "<script type='text/javascript'>window.location.href='../PublicMetodi/logout.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>window.location.href='../PublicMetodi/logout.php';</script>";
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <<link rel="stylesheet" href="../Librerie/Bootstrap-4.0.0/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="../Librerie/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <?php
        include_once "../ComponentiBase/componenti.php";
        navBar();
    ?>

    <div class="container-fluid">
      <div class="row">
        <?php
            sideBarAdmin();
        ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="row">
              
          </div>
        </main>
      </div>
    </div>


    <script type="text/javascript" src="../Librerie/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/popper-1.12.9/popper.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
