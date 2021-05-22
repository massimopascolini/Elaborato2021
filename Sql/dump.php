<?
include_once "../connessione.php";

$pwd = "123456";
$pwd_crypt = password_hash($pwd,PASSWORD_BCRYPT);

$pdo = connessione();
try{
    $sql = "INSERT INTO `amministratore`(`id_amministratore`, `nome`, `cognome`, `email`, `pwd`) VALUES "
        ."('admin','amministratore','amministratore','massimo.pascolini.2002@gmail.com','$pwd_crypt')";
    $pdo->exec($sql);
} catch(PDOException $pdoe){
    echo $pdoe->getMessage();
}
$pdo = null;