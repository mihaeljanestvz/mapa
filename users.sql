-- Active: 1730057184452@@127.0.0.1@3306@ribolov_db
USE ribolov_db;

CREATE TABLE countries (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE users (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    country_id INT(11) UNSIGNED,
    PRIMARY KEY (id),
    UNIQUE KEY (username),
    UNIQUE KEY (email),
    FOREIGN KEY (country_id) REFERENCES countries(id) ON DELETE SET NULL
);

INSERT INTO countries (name) VALUES ('Croatia'), ('Serbia'), ('Bosnia'), ('Slovenia'), ('Italy');
