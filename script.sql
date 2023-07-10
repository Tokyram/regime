CREATE DATABASE regime;

USE regime;

CREATE TABLE users(
    idUser INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    pseudo VARCHAR(10),
    email VARCHAR(20),
    mdp VARCHAR(20),
    genre INT,
    taille NUMERIC(10, 2),
    poids NUMERIC(10, 2),
    typeUser INT
);

CREATE TABLE histoPocket(
    idHistoPocket INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idUser INT,
    montant NUMERIC(10, 2),
    dateEntree DATETIME,
    dateSortie DATETIME,
    CONSTRAINT FK_user FOREIGN KEY(idUser)
    REFERENCES users(idUser)
);

CREATE TABLE typeActivite(
    idType INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nom VARCHAR(20)
);

CREATE TABLE activite(
    idAct INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idType INT,
    nom VARCHAR(20),
    resultat NUMERIC(10, 2),
    frequence INT,
    CONSTRAINT FK_type FOREIGN KEY(idType)
    REFERENCES typeActivite(idType)
);

CREATE TABLE code(
    idCode INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    code VARCHAR(50),
    montant NUMERIC(10, 2)
);

CREATE TABLE histoCode(
    idHistoCode INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idCode INT,
    idUser INT,
    statusCode INT,
    CONSTRAINT FK_code FOREIGN KEY(idCode)
    REFERENCES code(idCode),
    CONSTRAINT FK_userCode FOREIGN KEY(idUser)
    REFERENCES users(idUser)
);

CREATE TABLE regime(
    idRegime INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idUser INT,
    dateRegime DATETIME,
    CONSTRAINT FK_userRegime FOREIGN KEY(idUser)
    REFERENCES users(idUser)
);

CREATE TABLE regimeCompo(
    idCompo INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idRegime INT,
    idAct INT,
    CONSTRAINT FK_regime FOREIGN KEY(idRegime)
    REFERENCES regime(idRegime),
    CONSTRAINT FK_act FOREIGN KEY(idAct)
    REFERENCES activite(idAct)
);


