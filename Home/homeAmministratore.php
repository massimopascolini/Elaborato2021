<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] != true) {
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

    <link rel="stylesheet" href="../Librerie/Bootstrap-4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../Librerie/css/styles.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">
    <?php
    include_once "../ComponentiBase/componenti.php";
    navBarAdmin();
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <?php
        sideBarAdmin();
        ?>
        </div>
        <div id="layoutSidenav_content">
            <div class="row">

            </div>
        </div>
    </div>


<script type="text/javascript" src="../Librerie/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/popper-1.12.9/popper.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../Librerie/js/scripts.js"></script>
</body>
</html>
