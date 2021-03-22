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
    proprietaire    TINYINT UNSIGNED,
    CONSTRAINT PK_idMateriel   PRIMARY KEY (id),
    CONSTRAINT FK_status FOREIGN KEY (status) REFERENCES statusMateriel(id),
    CONSTRAINT FK_type FOREIGN KEY (type) REFERENCES typeMateriel(id),
    CONSTRAINT FK_proprietaire FOREIGN KEY (proprietaire) REFERENCES user(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE region (
    id TINYINT UNSIGNED AUTO_INCREMENT,
    libelleRegion VARCHAR(255),
    CONSTRAINT PK_idRegion PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE departement (
    id VARCHAR(5) COMMENT "numero du departement",
    libelleDepartement VARCHAR(255),
    region TINYINT UNSIGNED NOT NULL,
    CONSTRAINT PK_idDepartement PRIMARY KEY (id),
    CONSTRAINT FK_region FOREIGN KEY (region) REFERENCES region(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE ville (
    id TINYINT UNSIGNED AUTO_INCREMENT,
    libelleVille VARCHAR(255),
    departement VARCHAR(5),
    CONSTRAINT PK_idVille PRIMARY KEY (id),
    CONSTRAINT FK_departement FOREIGN KEY (departement) REFERENCES departement(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE lieux (
    id TINYINT UNSIGNED AUTO_INCREMENT,
    libelleLieu VARCHAR(255) NOT NULL,
    ville TINYINT UNSIGNED NOT NULL,
    coordoneesX DOUBLE,
    coordoneesY DOUBLE,
    CONSTRAINT PK_idLieu PRIMARY KEY (id),
    CONSTRAINT FK_ville FOREIGN KEY (ville) REFERENCES ville(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE participant (
    id TINYINT UNSIGNED AUTO_INCREMENT,
    libelleParticipant VARCHAR(255) NOT NULL,
    CONSTRAINT PK_idParticipant PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

CREATE TABLE sortie (
    id           TINYINT UNSIGNED AUTO_INCREMENT,
    lieux        TINYINT UNSIGNED NOT NULL,
    participant  TINYINT UNSIGNED NOT NULL,
    dateSortie   DATE NOT NULL,
    voie         LONGTEXT,
    CONSTRAINT PK_idSortie PRIMARY KEY (id),
    CONSTRAINT FK_lieu FOREIGN KEY (lieux) REFERENCES lieux(id),
    CONSTRAINT FK_participant FOREIGN KEY (participant) REFERENCES participant(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- ===============================================================================================================
--   Alimentation des tables (User)
-- ===============================================================================================================

INSERT INTO user (username, password, creationDate, score, etatCompte) VALUES ("loris", "$2y$10$gjqKfFvjYEu31aEXVSF9x.nxUCdaOf4wGmrJNrUXgi8Qv/6TrWzdG", NULL, NULL, NULL);

-- ===============================================================================================================
--   Alimentation des tables (Materiel)                                
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

INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("CORDE D'ESCALADE 10MM X 80M - ROCK BLEU", "Simond", "2019-12-15", 110, "", "public/images/produit/cordeRock80.webp", 1, 1, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("SAC A CORDE ESSENTIEL GRIS CARBONE", "Simond", "2019-12-15", 13, "", "public/images/produit/sacCorde.webp", 1, 3, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("DÉGAINE ROCKY 11 CM", "Simond", "2019-12-15", 8.50, "Quantité : 13", "public/images/produit/degaineRocky11.webp", 1, 2, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("DÉGAINE ROCKY 17 CM", "Simond", "2019-12-15", 11, "Quantité : 3", "public/images/produit/degaineRocky17.webp", 1, 2, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("MOUSQUETON A VIS HMS - GOLIATH POLI", "Simond", "2019-12-15", 8, "Quantité : 4", "public/images/produit/mousquetonGoliath.webp", 1, 6, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("CASQUE D'ESCALADE ET D'ALPINISME - ROCK BLANC", "Simond", "2019-12-15", 25, "Noémie", "public/images/produit/casqueRockBlanc.webp", 1, 4, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("CASQUE D'ESCALADE ET D'ALPINISME - ROCK GRIS", "Simond", "2019-12-15", 25, "Loris", "public/images/produit/casqueRockGris.webp", 1, 4, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("TUBIK 2 SIMOND", "Simond", "2019-12-15", 25, "Quantité : 2", "public/images/produit/assureurTubik.webp", 1, 9, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("CHAUSSONS D'ESCALADE - ROCK", "Simond", "2019-12-15", 35, "Noémie", "public/images/produit/chaussonRockNoemie.webp", 1, 7, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("CHAUSSONS D'ESCALADE - ROCK+ GRIS", "Simond", "2019-12-15", 50, "Loris", "public/images/produit/chaussonRock+Loris.webp", 1, 7, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("HARNAIS ESCALADE - EASY 3 BLEU", "Simond", "2019-12-15", 35, "Noémie", "public/images/produit/baudrierNoemie.webp", 1, 8, 1);
INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, image, status, type, proprietaire) VALUES ("LONGE D'ESCALADE SIMPLE 75 CM", "Simond", "2019-12-15", 10, "Quantité : 2", "public/images/produit/longe75.webp", 1, 5, 1);

INSERT INTO materiel (nom, marque, dateAchat, prix, commentaire, status, type, proprietaire) VALUES ("ZE TOPO", "édition", "2019-12-15", 20, "", 1, 10, 1);

-- ===============================================================================================================
--   Alimentation des tables (Sortie)                                
-- ===============================================================================================================

INSERT INTO region (libelleRegion) VALUES ("Auvergne-Rhône-Alpes"),
                                          ("Bourgogne-Franche-Comté"),
                                          ("Bretagne"),
                                          ("Centre-Val de Loire"),
                                          ("Corse"),
                                          ("Grand Est"),
                                          ("Hauts-de-France"),
                                          ("Ile-de-France"),
                                          ("Normandie"),
                                          ("Nouvelle-Aquitaine"),
                                          ("Occitanie"),
                                          ("Pays de la Loire"),
                                          ("Provence-Alpes-Côte d’Azur");

INSERT INTO departement (id, libelleDepartement, region) VALUES ("01", "Ain", 1),
                                                                ("03", "Allier", 1),
                                                                ("07", "Ardèche", 1),
                                                                ("15", "Cantal", 1),
                                                                ("26", "Drôme", 1),
                                                                ("38", "Isère", 1),
                                                                ("42", "Loire", 1),
                                                                ("43", "Haute-Loire", 1),
                                                                ("63", "Puy-de-Dôme", 1),
                                                                ("69", "Rhone", 1),
                                                                ("73", "Savoie", 1),
                                                                ("74", "Haute-Savoie", 1);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("21", "Côte-d'or", 2),
                                                                ("25", "Doubs", 2),
                                                                ("39", "Jura", 2),
                                                                ("58", "Nièvre", 2),
                                                                ("70", "Haute-Saône", 2),
                                                                ("71", "Saône-et-Loire", 2),
                                                                ("89", "Yonne", 2),
                                                                ("90", "Territoire de Belfort", 2);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("22", "Côtes-d'Armor", 3),
                                                                ("29", "Finistère", 3),
                                                                ("35", "Ille-et-Vilaine", 3),
                                                                ("56", "Morbihan", 3);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("18", "Cher", 4),
                                                                ("28", "Eure-et-Loir", 4),
                                                                ("36", "Indre", 4),
                                                                ("37", "Indre-et-Loire", 4),
                                                                ("41", "Loir-et-Cher", 4),
                                                                ("45", "Loiret", 4);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("2A", "Corse-du-Sud", 5),
                                                                ("2B", "Haute-Corse", 5);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("08", "Ardennes", 6),
                                                                ("10", "Aube", 6),
                                                                ("51", "Marne", 6),
                                                                ("52", "Haute-Marne", 6),
                                                                ("54", "Meurthe-et-Moselle", 6),
                                                                ("55", "Meuse", 6),
                                                                ("57", "Moselle", 6),
                                                                ("67", "Bas-Rhin", 6),
                                                                ("68", "Haut-Rhin", 6),
                                                                ("88", "Vosges", 6);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("02", "Aisne", 7),
                                                                ("59", "Nord", 7),
                                                                ("60", "Oise", 7),
                                                                ("62", "Pas-de-Calais", 7),
                                                                ("80", "Somme", 7);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("75", "Paris", 8),
                                                                ("77", "Seine-et-Marne", 8),
                                                                ("78", "Yvellines", 8),
                                                                ("91", "Essonne", 8),
                                                                ("92", "Haut-de-Seine", 8),
                                                                ("93", "Seine-Saint-Denis", 8),
                                                                ("94", "Val-de-Marne", 8),
                                                                ("95", "Val-d'Oise", 8);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("14", "Calvados", 9),
                                                                ("27", "Eure", 9),
                                                                ("50", "Manche", 9),
                                                                ("61", "Orne", 9),
                                                                ("76", "Seine-Maritime", 9);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("16", "Charente", 10),
                                                                ("17", "Charente-Maritime", 10),
                                                                ("19", "Corrèze", 10),
                                                                ("23", "Creuse", 10),
                                                                ("24", "Dordogne", 10),
                                                                ("33", "Gironde", 10),
                                                                ("40", "Landes", 10),
                                                                ("47", "Lot-et-Garonne", 10),
                                                                ("64", "Pyrénées-Atlantiques", 10),
                                                                ("79", "Deux-Sèvres", 10),
                                                                ("86", "Vienne", 10),
                                                                ("87", "Haute-Vienne", 10);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("09", "Ariège", 11),
                                                                ("11", "Aude", 11),
                                                                ("12", "Aveyron", 11),
                                                                ("30", "Gard", 11),
                                                                ("31", "Haute-Garonne", 11),
                                                                ("32", "Gers", 11),
                                                                ("34", "Herault", 11),
                                                                ("46", "Lot", 11),
                                                                ("48", "Lozère", 11),
                                                                ("65", "Hautes-pyrénées", 11),
                                                                ("66", "Pyrénées-Orientales", 11),
                                                                ("81", "Tarn", 11),
                                                                ("82", "Tarn-et-Garonne", 11);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("44", "Loire-Atlantique", 12),
                                                                ("49", "Maine-et-Loire", 12),
                                                                ("53", "Mayenne", 12),
                                                                ("72", "Sarthe", 12),
                                                                ("85", "Vendée", 12);
INSERT INTO departement (id, libelleDepartement, region) VALUES ("04", "Alpes-de-Haute-Provence", 13),
                                                                ("05", "Hautes-Alpes", 13),
                                                                ("06", "Alpes-Maritimes", 13),
                                                                ("13", "Bouches-du-Rhône", 13),
                                                                ("83", "Var", 13),
                                                                ("84", "Vaucluse", 13);