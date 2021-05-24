<?php
include_once "../connessione.php";

$amministratore = "CREATE TABLE amministratore (
    id_amministratore VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    pwd VARCHAR(255)
);";

$negozio = "CREATE TABLE negozio (
    p_iva VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    stato INT NOT NULL DEFAULT '1',
    orario_ordinazione TIME,
    id_amministratore VARCHAR(255),
    FOREIGN KEY(id_amministratore) REFERENCES amministratore(id_amministratore)
);";

$negoziante = "CREATE TABLE commerciante (
    id_commerciante VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    pwd VARCHAR(255),
    data_nascita DATE,
    luogo_nascita VARCHAR(50),
    sesso VARCHAR(1),
    codice_fiscale VARCHAR(16),
    p_iva VARCHAR(255),
    FOREIGN KEY(p_iva) REFERENCES negozio(p_iva)
);";

$cliente = "CREATE TABLE cliente (
    id_cliente VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    pwd VARCHAR(255),
    data_nascita DATE,
    luogo_nascita VARCHAR(50),
    sesso VARCHAR(1),
    codice_fiscale VARCHAR(16)
);";

$unita_misura = "CREATE TABLE unita_misura (
    id_unita_misura INT PRIMARY KEY AUTO_INCREMENT,
    descrizione VARCHAR(30)
);";

$prodotto = "CREATE TABLE prodotto (
    id_prodotto INT PRIMARY KEY AUTO_INCREMENT,
    nume VARCHAR (255),
    prezzo DOUBLE,
    id_unita_misura INT,
    FOREIGN KEY(id_unita_misura) REFERENCES unita_misura(id_unita_misura),
    vendibile INT NOT NULL DEFAULT '1',
    p_iva VARCHAR(255),
    FOREIGN KEY (p_iva) REFERENCES negozio(p_iva)  
);";

$ordine = "CREATE TABLE ordine (
    id_ordine INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente VARCHAR (255),
    FOREIGN KEY(id_cliente) REFERENCES cliente(id_cliente),
    id_prodotto INT,
    FOREIGN KEY(id_prodotto) REFERENCES prodotto(id_prodotto),
    quantita INT,
    data_ordine DATE,
    ora_ordine TIME,
    data_consegna DATE
);";

$pdo = connessione();
try {
    $pdo->exec($amministratore);
    $pdo->exec($negozio);
    $pdo->exec($negoziante);
    $pdo->exec($cliente);
    $pdo->exec($unita_misura);
    $pdo->exec($prodotto);
    $pdo->exec($ordine);
} catch (PDOException $pdoe) {
    echo $pdoe->getMessage();
}
$pdo = null;