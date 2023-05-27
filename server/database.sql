CREATE DATABASE information;

USE information;

CREATE TABLE
    profile(
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name VARCHAR(100),
        email VARCHAR(100) UNIQUE,
        birthday DATE,
        phone VARCHAR(14),
        password VARCHAR(100),
        address VARCHAR(100),
        numbers VARCHAR(100),
        complement VARCHAR(10),
        city VARCHAR(10),
        link_linkedin VARCHAR(225)
    );

SELECT * FROM profile;

DROP TABLE profile;
