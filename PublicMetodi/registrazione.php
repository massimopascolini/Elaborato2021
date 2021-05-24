<?php
include_once "../connessione.php";

$stringa = html_entity_decode(filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING));
$parametri = json_decode($stringa);

$esito = 0;

$pdo = connessione();
try {
    $queryU = "SELECT * FROM cliente WHERE UPPER(id_cliente) = '" . strtoupper($parametri->id_utente) . "'";
    $n = $pdo->query($queryU)->rowCount();
    if ($n == 0) {
        $queryI = "INSERT INTO cliente (`id_cliente`, `nome`, `cognome`, `email`, `pwd`, `data_nascita`, `luogo_nascita`, `sesso`, `codice_fiscale`) VALUES "
        ."(:idU,:nome,:cognome,:email,:pwd,:dataN,:luogoN,:sesso,:cf)";
        $stmt  = $pdo->prepare($queryI);
        $stmt->bindValue(":idU",$parametri->id_utente);
        $stmt->bindValue(":nome",$parametri->nome);
        $stmt->bindValue(":cognome",$parametri->cognome);
        $stmt->bindValue(":email",$parametri->email);
        $stmt->bindParam(":pwd",$pwd_crypt);
        $stmt->bindValue(":dataN",$parametri->d_nascita);
        $stmt->bindValue(":luogoN",$parametri->LuogoNascita);
        $stmt->bindValue(":sesso",$parametri->Sesso);
        $stmt->bindValue(":cf",$parametri->codiceFiscale);
        $pwd_crypt  = password_hash($parametri->password,PASSWORD_BCRYPT);
        $stmt->execute();
    } else {
        $esito = 2;
    }
} catch (PDOException $pdoe) {
    $esito = 1;
}
$pdo = null;
echo $esito;