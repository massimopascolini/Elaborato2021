<?php
function navBarAdmin(){
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../Home/homeAmministratore.php">Gruppo acquisto</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
        <!-- Navbar-->

            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"  onclick="window.location.href='../PublicMetodi/logout.php'">
                <i class="fas fa-sign-out-alt text-secondary"></i></button>

    </nav>
    <?php
}

function sideBarAdmin() {
  ?>
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="../Home/homeAmministratore.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="../Admin/gestioneNegozi.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                    Negozi
                </a>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Profilo
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
  <?php
}