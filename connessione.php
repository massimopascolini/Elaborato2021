<?php

function connessione(){
    $pdo = null;
    
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "gruppo_acquisto";
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        /*Nel caso in cui venga lanciata un'eccezione, verrà restituito il messaggio
         * di errore corrispondente.
         */
        echo("Connection failed: " . $e->getCode());
    }
    return $pdo;
}