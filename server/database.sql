CREATE DATABASE information;

USE information;

CREATE TABLE
    profile(
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name VARCHAR(100),
        last_name VARCHAR(100),
        email VARCHAR(100) UNIQUE,
        profession VARCHAR(50),
        phone VARCHAR(14),
        address VARCHAR(50),
        city VARCHAR(50),
        country VARCHAR(50),
        password VARCHAR(100)
    );

ALTER TABLE profile ADD COLUMN bio VARCHAR(6555);

ALTER TABLE profile ADD COLUMN college VARCHAR(225);

SELECT * FROM profile;

DROP TABLE profile;
