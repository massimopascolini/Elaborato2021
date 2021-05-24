<?php
session_start();
include_once "../connessione.php";

$stringa = html_entity_decode(filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING));
$parametri = json_decode($stringa);

$esito = 0;

$query = "";
switch (intval($parametri->tipo_utente)){
    case 0:
        $query = "SELECT * FROM cliente WHERE UPPER(id_cliente) = '" . strtoupper($parametri->id_utente) . "'";
        break;
    case 1:
        $query = "SELECT * FROM commerciante WHERE UPPER(id_commerciante) = '" . strtoupper($parametri->id_utente) . "'";
        break;
    case 2:
        $query = "SELECT * FROM amministratore WHERE UPPER(id_amministratore) = '" . strtoupper($parametri->id_utente) . "'";
        break;
}

$pdo = connessione();
try {
    $n = $pdo->query($query)->rowCount();
    if ($n > 0) {
        $ogg = $pdo->query($query)->fetch(PDO::FETCH_OBJ);
        if (password_verify($parametri->password, $ogg->pwd)) {
            $_SESSION['login'] = true;
            $_SESSION['tipo_utente'] = $parametri->tipo_utente;
            $_SESSION['id_utente'] = $parametri->id_utente;
        } else {
            $esito = 2;
        }
    } else {
        $esito = 1;
    }
} catch (PDOException $pdoe) {
    echo $pdoe->getMessage();
}
$pdo = null;
echo $esito;
