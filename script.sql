CREATE DATABASE regime;

USE regime;

CREATE TABLE users(
    idUser INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    pseudo VARCHAR(10),
    email VARCHAR(20),
    mdp VARCHAR(20),
    genre INT,
    typeUser INT
);

CREATE TABLE info(
    idInfo INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    idUser INT,
    taille NUMERIC(10, 2),
    poids NUMERIC(10, 2),
    dateInfo DATETIME,
    CONSTRAINT FK_userInfo FOREIGN KEY(idUser)
    REFERENCES users(idUser)
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
    montant NUMERIC(10, 2),
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
    montant NUMERIC(10, 2),
    objectif NUMERIC(10, 2),
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

INSERT INTO users VALUES
(NULL, 'Admin', 'admin@gmail.com', 'admin', 1, 0),
(NULL, 'Toky', 'toky@gmail.com', 'toky', 1, 1),
(NULL, 'Miora', 'miora@gmail.com', 'miora', 0, 1),
(NULL, 'Yvan', 'yvan@gmail.com', 'yvan', 1, 1),
(NULL, 'Rabe', 'rabe@gmail.com', 'rabe', 1, 1),
(NULL, 'Randria', 'randria@gmail.com', 'randria', 0, 1);

INSERT INTO info VALUES
(NULL, 2, 167.5, 54, '2023-07-10 08:00:00'),
(NULL, 3, 150, 59, '2023-07-10 08:00:00'),
(NULL, 4, 190, 85, '2023-07-10 08:00:00'),
(NULL, 5, 175, 62, '2023-07-10 08:00:00'),
(NULL, 6, 154, 51, '2023-07-10 08:00:00');


INSERT INTO typeActivite VALUES
(NULL, 'Regime'),
(NULL, 'Sport');

INSERT INTO activite VALUES
(NULL, 1, 'Pomme', -1, 7, 500),
(NULL, 1, 'Cotelette', 2, 5, 5000),
(NULL, 1, 'Legumes sautees', -0.5, 4, 3000),
(NULL, 1, 'Fromage', 0.5, 5, 2000),
(NULL, 1, 'Poisson', -1, 3, 4500),
(NULL, 2, 'Planche', -5, 7, 0),
(NULL, 2, 'Jogging', -2, 5, 0),
(NULL, 2, 'Pompe', -4, 7, 0),
(NULL, 2, 'Flexion', -0.5, 3, 0),
(NULL, 2, 'Muscu', -1, 7, 0);


