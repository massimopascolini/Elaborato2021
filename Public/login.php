<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../Librerie/Bootstrap-4.0.0/css/bootstrap.min.css">

    <title>Gruppo Acquisto</title>
</head>
<body class="bg-light">
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-lg-4 offset-xl-4 col-md-6 offsetmd-3 col-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" placeholder="Username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="tipo_utente">Tipo utente:</label>
                            <select class="form-control" id="tipo_utente">
                                <option value="0">Cliente</option>
                                <option value="1">Negoziante</option>
                                <option value="2">Amministratore</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" onclick="login()">Accedi</button>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-link btn-block" onclick="window.location.href='../Public/registrazione.php'">Non hai un account? registrati.</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../Librerie/jquery/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/popper-1.12.9/popper.min.js"></script>
<script type="text/javascript" src="../Librerie/Bootstrap-4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../PublicJavascript/login.js"></script>
</body>

</html>
