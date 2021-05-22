CREATE TABLE amministratore (
    id_amministratore VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    pwd VARCHAR(255)
);

CREATE TABLE negozio (
    p_iva VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    stato INT NOT NULL DEFAULT '1',
    orario_ordinazione TIME,
    id_amministratore VARCHAR(255),
    FOREIGN KEY(id_amministratore) REFERENCES amministratore(id_amministratore)
);

CREATE TABLE commerciante (
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
);

CREATE TABLE cliente {
    id_cliente VARCHAR(255) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    pwd VARCHAR(255),
    data_nascita DATE,
    luogo_nascita VARCHAR(50),
    sesso VARCHAR(1),
    codice_fiscale VARCHAR(16),
}
