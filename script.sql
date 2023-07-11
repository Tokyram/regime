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
(NULL, 'User', 'user@gmail.com', 'user', 1, 1),
(NULL, 'Raitra', 'raitra@gmail.com', 'raitra', 1, 1),
(NULL, 'Toky', 'toky@gmail.com', 'toky', 1, 1),
(NULL, 'Princy', 'princy@gmail.com', 'princy', 0, 1);

INSERT INTO info VALUES
(NULL, 2, 169, 65, '2023-07-10 08:00:00'),
(NULL, 3, 160, 55, '2023-07-10 08:00:00'),
(NULL, 4, 167.5, 67, '2023-07-10 08:00:00'),
(NULL, 5, 150, 45, '2023-07-10 08:00:00');

INSERT INTO typeActivite VALUES
(NULL, 'Regime'),
(NULL, 'Sport');

INSERT INTO activite VALUES
(NULL, 1, 'Avocat', -1, 7, 3000),
(NULL, 1, 'Pattes', 2, 5, 5000),
(NULL, 1, 'Pomme frite', 2.5, 2, 3000),
(NULL, 1, 'Yaourt', -0.5, 5, 2000),
(NULL, 1, 'Crevette', 1, 3, 4500),
(NULL, 2, 'Marche a pied', -5, 2, 0),
(NULL, 2, 'Pompe', -2, 10, 0),
(NULL, 2, 'Planche', -4, 7, 0),
(NULL, 2, 'Corde a sauter', -0.5, 3, 0),
(NULL, 2, 'Musculation', 1, 7, 0);

INSERT INTO code VALUES
(NULL, 'ABCcode1', 1000),
(NULL, 'CodeEvo2', 2000),
(NULL, 'Codefor3', 3000),
(NULL, 'Code4free', 4000),
(NULL, 'Codetap5', 5000),
(NULL, 'XXX_code666', 6000),
(NULL, 'Codeigniter', 7000),
(NULL, 'Infinite_Code8', 8000),
(NULL, 'InitCode09', 9000),
(NULL, 'TheCode10', 10000),
(NULL, 'CInazuma11', 11000),
(NULL, 'Col12', 12000),
(NULL, 'Code_Promo13', 13000),
(NULL, 'Cod14', 14000),
(NULL, 'CodexArt15', 15000),

INSERT INTO histoCode VALUES
(NULL, 12, 3, 0),
(NULL, 12, 4, 0),
(NULL, 4, 4, 0),
(NULL, 9, 5, 0),
(NULL, 10, 2, 0);

INSERT INTO histoPocket VALUES
(NULL, 2, 100000,'2023-07-10 08:00:00', NULL),
(NULL, 3, 150000, '2023-07-10 08:00:00', NULL),
(NULL, 4, 250000, '2023-07-10 08:00:00', NULL),
(NULL, 5, 300000, '2023-07-10 08:00:00', NULL);