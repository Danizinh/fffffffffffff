CREATE DATABASE clientPayout;

USE clientPayout;

CREATE TABLE
    pay(
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name VARCHAR(100),
        email VARCHAR(100),
        phone VARCHAR(14),
        address VARCHAR(50),
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        age INT
    );

DROP TABLE pay;

SELECT * FROM pay;

INSERT INTO
    pay(name, email, phone, address, age)
VALUES (
        "Daniela",
        "danimaltoc@gmail.com",
        "11 991583600",
        "Rua jaiba 225",
        22
    );
