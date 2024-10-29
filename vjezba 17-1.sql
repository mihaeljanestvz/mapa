CREATE DATABASE user_country_db;

USE user_country_db;


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
    username VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    country_id INT(11) UNSIGNED,
    PRIMARY KEY (id),
    UNIQUE KEY username (username),
    UNIQUE KEY email (email),
    FOREIGN KEY (country_id) REFERENCES countries(id) ON DELETE SET NULL
);
-- Unos podataka u tablicu countries
INSERT INTO countries (name) VALUES
('Argentina'),
('Australia'),
('Brazil');

-- Unos podataka u tablicu users
INSERT INTO users (first_name, last_name, email, username, password, country_id) VALUES
('Bob', 'Johnson', 'bob.johnson@example.com', 'bobj', 'password_hash1', 1),
('Charlie', 'Brown', 'charlie.brown@example.com', 'charlieb', 'password_hash2', 1),
('Frank', 'Miller', 'frank.miller@example.com', 'frankm', 'password_hash3', 1),
('Grace', 'Moore', 'grace.moore@example.com', 'gracem', 'password_hash4', 1),
('Winnie', 'Young', 'winnie.young@example.com', 'winniey', 'password_hash5', 2);

SELECT users.first_name, users.last_name, countries.name AS country_name
FROM users
JOIN countries ON users.country_id = countries.id;
