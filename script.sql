CREATE DATABASE S4_48H;

create sequence seqUser;

CREATE TABLE users(
    idUser VARCHAR(10) NOT NULL PRIMARY KEY,
    pseudo VARCHAR(10),
    email VARCHAR(20),
    mdp VARCHAR(20),
    typeUser INT
);