CREATE DATABASE informacaoes;

USE informacaoes;

CREATE TABLE dados(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    person_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    password VARCHAR(100),
    phone VARCHAR(20),
    my_address VARCHAR(100),
    nationality VARCHAR(100),
    gender VARCHAR(1),
    link_linked_in VARCHAR(255),
    link_facebook VARCHAR(255),
    languages VARCHAR(255)
);

SELECT * FROM dados;
DROP TABLE dados;

insert into dados(nationality) values('brasil');
