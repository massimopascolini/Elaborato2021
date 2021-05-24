<?php
session_start();
include_once "../connessione.php";

$stringa = html_entity_decode(filter_input(INPUT_POST, "data", FILTER_SANITIZE_STRING));
$parametri = json_decode($stringa);

$esito = 0;

$pdo = connessione();
try{
    $sqlIN = "INSERT INTO negozio(p_iva, nome, stato, id_amministratore) VALUES "
    ."(:pIva, :nome, '1', :idAmm)";
    $stmt = $pdo->prepare($sqlIN);
    $stmt->bindValue(":pIva", $parametri->p_iva);
    $stmt->bindValue(":nome", $parametri->nomeN);
    $stmt->bindParam(":idAmm", $id_amm);
    $id_amm = $_SESSION['id_utente'];
    $stmt->execute();

    $oggN = $pdo->query("SELECT * FROM negozio WHERE p_iva = '$parametri->p_iva'")->fetch(PDO::FETCH_OBJ);

    $userName = strtolower($parametri->nomeComm);
    $trovato = 0;
    $n = 0;
    do{
        if($trovato != 0){
            $userName = $userName."-".($n+1);
        }
        $trovato = 0;
        $n = $pdo->query("SELECT * FROM commerciante WHERE id_commerciante = '$userName'")->rowCount();
        if($n>0){
            $trovato = 1;
        }
    }while($trovato == 1);

    $pwd = strtolower($parametri->nomeComm)."-123";
    $pwd_crypt = password_hash($pwd, PASSWORD_BCRYPT);



    $sqlIComm = "INSERT INTO `commerciante`(`id_commerciante`, `nome`, `cognome`, `email`, `pwd`, `p_iva`) VALUES "
        ."(:id_commerciante, :nome, :cognome, :emailComm, :pwd, :p_iva)";
    $stmt2 = $pdo->prepare($sqlIComm);

    $stmt2->bindValue(":id_commerciante", $userName);
    $stmt2->bindValue(":nome", $parametri->nomeComm);
    $stmt2->bindValue(":cognome", $parametri->cognomeComm);
    $stmt2->bindValue(":emailComm", $parametri->emailComm);
    $stmt2->bindValue(":pwd", $pwd_crypt);
    $stmt2->bindParam(":p_iva", $pIva);

    $pIva = $oggN->p_iva;

    $stmt2->execute();

} catch (PDOException $pdoe){
    //echo $pdoe->getMessage();
    $esito = 1;
}
$pdo = null;
echo $esito;
