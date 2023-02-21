CREATE DATABASE informacaoes;

USE informacaoes;

CREATE TABLE
    profil(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        img VARCHAR(50),
        person_name VARCHAR(100),
        gender VARCHAR(1),
        birthday DATE,
        profession VARCHAR(225),
        email VARCHAR(100) UNIQUE,
        phone VARCHAR(9),
        password VARCHAR(100),
        my_address VARCHAR(100),
        numberss VARCHAR(22),
        complement VARCHAR(10),
        city VARCHAR(10),
        link_linked_in VARCHAR(255),
    );

SELECT * FROM profil;

DROP TABLE profil;
