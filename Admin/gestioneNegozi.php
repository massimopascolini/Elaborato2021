<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] != true) {
        echo "<script type='text/javascript'>window.location.href='../PublicMetodi/logout.php';</script>";
    }
} else {
    echo "<script type='text/javascript'>window.location.href='../PublicMetodi/logout.php';</script>";
}

if ($_SESSION['tipo_utente'] != 2) {
    echo "<script type='text/javascript'>"
        . "alert('Non sei autorizzato a questa sezione!');"
        . "window.location.href='../PublicMetodi/logout.php';"
        . "</script>";
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>

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
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header bg-info">
                            <div class="card-title">Negozi amministrati</div>
                        </div>
                        <div class="card-body">
                           <form method="post">
                               <div class="form-group">
                                   <label for="p_iva">Partita iva:</label>
                                   <input id="p_iva" class="form-control" type="text" placeholder="Partita iva">
                               </div>

                               <div class="form-group">
                                   <label for="nomeN">Nome negozio:</label>
                                   <input id="nomeN" class="form-control" type="text" placeholder="Nome negozio">
                               </div>

                                <hr>

                               <div class="form-group">
                                   <label for="nomeComm">Nome commerciante:</label>
                                   <input id="nomeComm" class="form-control" type="text" placeholder="Nome commerciante">
                               </div>

                               <div class="form-group">
                                   <label for="cognomeComm">Cognome commerciante:</label>
                                   <input id="cognomeComm" class="form-control" type="text" placeholder="Cognome commerciante">
                               </div>

                               <div class="form-group">
                                   <label for="emailComm">Cognome commerciante:</label>
                                   <input id="emailComm" class="form-control" type="text" placeholder="Email commerciante">
                               </div>

                               <div class="form-group">
                                   <button type="button" class="btn btn-primary btn-block" onclick="inserimentonegozio()">Inserisci</button>
                               </div>

                               <div class="form-group">
                                   <div class="alert alert-info">
                                       I dati fiscali del negoziante saranno auto-inseriti al primo accesso!
                                   </div>
                               </div>

                           </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 ">
                    <div class="card">
                        <div class="card-header bg-info">
                            <div class="card-title">Negozi amministrati</div>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Partita iva</th>
                                    <th>Stato</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include_once "../connessione.php";
                                $pdo = connessione();
                                try {
                                    $sql = "SELECT * FROM negozio WHERE id_amministratore = '" . $_SESSION['id_utente'] . "'";
                                    $array = $pdo->query($sql)->fetchAll(PDO::FETCH_OBJ);
                                    for ($i = 0; $i < count($array); $i++) {
                                        echo "<tr>"
                                            . "<td>" . ($i + 1) . "</td>"
                                            . "<td>" . $array[$i]->nome . "</td>"
                                            . "<td>" . $array[$i]->p_iva . "</td>";
                                        if (intval($array[$i]->stato) == 1) {
                                            echo "<td><span class='badge badge-success'>Attivo</span></td>";
                                        } else {
                                            echo "<td><span class='badge badge-danger'>Disattivo</span></td>";
                                        }

                                        echo "<td><button type='button' class='btn ntn-primary'><i class='fas fa-pencil-alt'></i></button></td>"
                                            . "</tr>";
                                    }
                                } catch (PDOException $pdoe) {
                                    echo $pdoe->getMessage();
                                }
                                $pdo = null;
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="../Librerie/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/popper-1.12.9/popper.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../Librerie/js/scripts.js"></script>
<script type="text/javascript" src="../AdminJavascript/gestioneNegozio.js"></script>
</body>
</html>
