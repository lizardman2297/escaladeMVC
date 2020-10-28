DROP DATABASE IF EXISTS escaladeMVC;
CREATE DATABASE escaladeMVC;
USE escaladeMVC;


-- ===============================================================================================================
--   création des tables                                
-- ===============================================================================================================

CREATE TABLE user (
    id           TINYINT UNSIGNED AUTO_INCREMENT,
    username     VARCHAR(50) NOT NULL,
    password     VARCHAR(255) NOT NULL,
    creationDate DATE,
    score        INT,
    etatCompte   TINYINT UNSIGNED,
    CONSTRAINT UK_username UNIQUE KEY (username),
    CONSTRAINT PK_idUser   PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE statusMateriel (
    id            TINYINT UNSIGNED AUTO_INCREMENT,
    libelleStatus VARCHAR(50),
    CONSTRAINT PK_idStatus PRIMARY KEY (id),
    CONSTRAINT UK_libelleStatus UNIQUE KEY (libelleStatus)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE typeMateriel (
    id          TINYINT UNSIGNED AUTO_INCREMENT,
    libelleType VARCHAR(50),
    CONSTRAINT PK_idType PRIMARY KEY (id),
    CONSTRAINT UK_libelleType UNIQUE KEY (libelleType)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE materiel (
    id              TINYINT UNSIGNED AUTO_INCREMENT,
    nom             VARCHAR(50) NOT NULL,
    reference       VARCHAR(50),
    dateAchat       DATE,
    marque          VARCHAR(50),
    quantite        INT UNSIGNED,
    prix            FLOAT UNSIGNED,
    commentaire     LONGTEXT,
    image           VARCHAR(255),
    status          TINYINT UNSIGNED,
    type            TINYINT UNSIGNED,
    CONSTRAINT PK_idMateriel   PRIMARY KEY (id),
    CONSTRAINT FK_status FOREIGN KEY (status) REFERENCES statusMateriel(id),
    CONSTRAINT FK_type FOREIGN KEY (type) REFERENCES typeMateriel(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- ===============================================================================================================
--   Alimentation des tables                                
-- ===============================================================================================================

INSERT INTO statusMateriel (libelleStatus) VALUES ('Actuel');
INSERT INTO statusMateriel (libelleStatus) VALUES ('Ancien');
INSERT INTO statusMateriel (libelleStatus) VALUES ('Futur');

INSERT INTO typeMateriel (libelleType) VALUES ('Corde');
INSERT INTO typeMateriel (libelleType) VALUES ('Dégaine');
INSERT INTO typeMateriel (libelleType) VALUES ('Sac à corde');
INSERT INTO typeMateriel (libelleType) VALUES ('Casque');
INSERT INTO typeMateriel (libelleType) VALUES ('Vache');
INSERT INTO typeMateriel (libelleType) VALUES ('Mousqueton à vis');
INSERT INTO typeMateriel (libelleType) VALUES ('Chausson');
INSERT INTO typeMateriel (libelleType) VALUES ('Baudrier');
INSERT INTO typeMateriel (libelleType) VALUES ('Assureur');
INSERT INTO typeMateriel (libelleType) VALUES ('Autre');

INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("CORDE D'ESCALADE 10MM X 80M - ROCK BLEU", "Simond", "2019-12-15", 110, "", "public/images/produit/cordeRock80.webp", 1, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("SAC A CORDE ESSENTIEL GRIS CARBONE", "Simond", "2019-12-15", 13, "", "public/images/produit/sacCorde.webp", 1, 3);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("DÉGAINE ROCKY 11 CM", "Simond", "2019-12-15", 8.50, "Quantité : 13", "public/images/produit/degaineRocky11.webp", 1, 2);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("DÉGAINE ROCKY 17 CM", "Simond", "2019-12-15", 11, "Quantité : 3", "public/images/produit/degaineRocky17.webp", 1, 2);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("MOUSQUETON A VIS HMS - GOLIATH POLI", "Simond", "2019-12-15", 8, "Quantité : 4", "public/images/produit/mousquetonGoliath.webp", 1, 6);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("CASQUE D'ESCALADE ET D'ALPINISME - ROCK BLANC", "Simond", "2019-12-15", 25, "Noémie", "public/images/produit/casqueRockBlanc.webp", 1, 4);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("CASQUE D'ESCALADE ET D'ALPINISME - ROCK GRIS", "Simond", "2019-12-15", 25, "Loris", "public/images/produit/casqueRockGris.webp", 1, 4);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("TUBIK 2 SIMOND", "Simond", "2019-12-15", 25, "Quantité : 2", "public/images/produit/assureurTubik.webp", 1, 9);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("CHAUSSONS D'ESCALADE - ROCK", "Simond", "2019-12-15", 35, "Noémie", "public/images/produit/chaussonRockNoemie.webp", 1, 7);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("CHAUSSONS D'ESCALADE - ROCK+ GRIS", "Simond", "2019-12-15", 50, "Loris", "public/images/produit/chaussonRock+Loris.webp", 1, 7);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("HARNAIS ESCALADE - EASY 3 BLEU", "Simond", "2019-12-15", 35, "Noémie", "public/images/produit/baudrierNoemie.webp", 1, 8);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type) VALUES ("LONGE D'ESCALADE SIMPLE 75 CM", "Simond", "2019-12-15", 10, "Quantité : 2", "public/images/produit/longe75.webp", 1, 5);

INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, status, type) VALUES ("ZE TOPO", "édition", "2019-12-15", 20, "", 1, 10);