<?php
include_once "../connessione.php";

$pwd = "123456";
$pwd_crypt = password_hash($pwd,PASSWORD_BCRYPT);

$amministratore = "INSERT INTO `amministratore`(`id_amministratore`, `nome`, `cognome`, `email`, `pwd`) VALUES "
    ."('admin','amministratore','amministratore','massimo.pascolini.2002@gmail.com','$pwd_crypt')";

$unita_misura = "INSERT INTO unita_misura (descrizione) VALUES "
."('g'),('Hg'),('Kg'),('ml'),('cl'),('l'),('pezzi')";
$pdo = connessione();
try{
    //$pdo->exec($amministratore);
    $pdo->exec($unita_misura);
} catch(PDOException $pdoe){
    echo $pdoe->getMessage();
}
$pdo = null;