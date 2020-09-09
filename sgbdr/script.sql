DROP DATABASE IF EXISTS escaladeMVC;
CREATE DATABASE escaladeMVC;
USE escaladeMVC;

CREATE TABLE user (
    id TINYINT UNSIGNED AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    creationDate DATE,
    score INT,

    CONSTRAINT UK_username UNIQUE KEY (username),
    CONSTRAINT PK_idUser PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;

INSERT INTO user (username, password) VALUES ('loris', '$2y$10$m3Oh38TU4eyVSJlpyhX09e18ME86iK4dpvMj5uc2In/kgHMB9YrYW');