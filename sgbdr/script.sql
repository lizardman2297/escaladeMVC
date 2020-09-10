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
    commentaire     LONGTEXT,
    image           VARCHAR(255),
    caracteristique LONGTEXT,
    status          TINYINT UNSIGNED,
    type            TINYINT UNSIGNED,
    CONSTRAINT PK_idMateriel   PRIMARY KEY (id),
    CONSTRAINT FK_status FOREIGN KEY (status) REFERENCES statusMateriel(id),
    CONSTRAINT FK_type FOREIGN KEY (type) REFERENCES typeMateriel(id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

-- ===============================================================================================================
--   Alimentation des tables                                
-- ===============================================================================================================

INSERT INTO user (username, password, etatCompte) VALUES ('loris', '$2y$10$m3Oh38TU4eyVSJlpyhX09e18ME86iK4dpvMj5uc2In/kgHMB9YrYW', 1);

INSERT INTO statusMateriel (libelleStatus) VALUES ('Actuel');
INSERT INTO statusMateriel (libelleStatus) VALUES ('Ancien');
INSERT INTO statusMateriel (libelleStatus) VALUES ('Futur');

INSERT INTO typeMateriel (libelleType) VALUES ('Corde');
INSERT INTO typeMateriel (libelleType) VALUES ('Degaine');
INSERT INTO typeMateriel (libelleType) VALUES ('Sac à corde');
INSERT INTO typeMateriel (libelleType) VALUES ('Casque');
INSERT INTO typeMateriel (libelleType) VALUES ('Vache');
INSERT INTO typeMateriel (libelleType) VALUES ('Mousqueton à vis');
INSERT INTO typeMateriel (libelleType) VALUES ('Chausson');
INSERT INTO typeMateriel (libelleType) VALUES ('Baudrier');
INSERT INTO typeMateriel (libelleType) VALUES ('Autre');

