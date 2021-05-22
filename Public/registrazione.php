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
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" placeholder="Nome" id="nome">
                        </div>
                        <div class="form-group">
                            <label for="password">Cognome:</label>
                            <input type="text" class="form-control" placeholder="Cognome" id="cognome">
                        </div>
                        <div class="form-group">
                            <label for="DataNascita">Data di Nascita:</label>
                            <input type="date" class="form-control" placeholder="Data di Nascita" id="DataNascita">
                        </div>
                        <div class="form-group">
                            <label for="LuogoNascita">Luogo di Nascita:</label>
                            <input type="text" class="form-control" placeholder="Es: Perugia" id="LuogoNascita">
                        </div>
                        <div class="form-group">
                            <label for="sesso">Sesso:</label>
                            <select class="form-control" id="sesso">
                                <option value="M">Maschio</option>
                                <option value="F">Femmina</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="codiceFiscale">Codice Fiscale:</label>
                            <input type="text" class="form-control" placeholder="codice fiscale" id="codiceFiscale">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary btn-block" onclick="registrazione()">Iscriviti</button>
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
<script type="text/javascript" src="../PublicJavascript/registrazione.js"></script>
</body>

</html>
