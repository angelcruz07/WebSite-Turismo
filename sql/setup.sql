-- Active: 1698628320755@@127.0.0.1@3306@tourism

DROP DATABASE IF EXISTS tourism;

CREATE DATABASE tourism; 

USE tourism;

CREATE TABLE roles ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    rol VARCHAR(20)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50), 
    email VARCHAR(30),
    password VARCHAR(255),
    rol_id INT(2),
    CONSTRAINT rol_id FOREIGN KEY (rol_id) REFERENCES roles(id)
);

CREATE TABLE events (
     id INT(11) AUTO_INCREMENT PRIMARY KEY,
     type VARCHAR(25) NOT NULL,
     title VARCHAR(25),
     description VARCHAR(300),
     date TIMESTAMP,
     image VARCHAR(3000)
);


CREATE TABLE request(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number INT(20) NOT NULL,
    description VARCHAR(255) NOT NULL, 
    type VARCHAR(25), 
    date TIMESTAMP,
    message VARCHAR(255), 
    status VARCHAR(25)
); 


CREATE TABLE blog (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title  VARCHAR(25),
    description VARCHAR(250), 
    date TIMESTAMP,
    image VARCHAR(3000)
);

CREATE TABLE lodging (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(250),
    phone_number INT(20) NULL,
    social_networks VARCHAR(250) NULL,
    image VARCHAR(3000)
)


CREATE TABLE restaurants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(25) NOT NULL, 
    name VARCHAR(50) NOT NULL, 
    description VARCHAR(255),
    location VARCHAR(255),
    phone_number INT(20),
    data TIMESTAMP, 
    image VARCHAR(3000)
);

CREATE TABLE gastronomy(
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(25) NOT NULL, 
    name VARCHAR(50) NOT NULL, 
    description VARCHAR(255),
    data TIMESTAMP, 
    image VARCHAR(3000)
);


CREATE TABLE services(
    id INT AUTO_INCREMENT PRIMARY KEY, 
    type VARCHAR(25), 
    name VARCHAR(50), 
    description VARCHAR(250), 
    image VARCHAR(3000), 
    location VARCHAR(255),
    route VARCHAR(255), 
    scheduls VARCHAR(255)
)

CREATE TABLE gallery (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    type VARCHAR(25),
    name VARCHAR(50), 
    description VARCHAR(255),
    location VARCHAR(255), 
    data TIMESTAMP
);


--Insert  fields into the roles table.
INSERT INTO roles (id, rol) VALUES  
    (1 , 'admin'),
    (2 , 'colaborador');


-- Insert fields into the users table.
-- The password for admin is admin.
-- The password for user is user.
INSERT INTO users (username, email, password, rol_id) VALUES 
    ('admin', 'admin@gmail.com', '$2y$10$WsSVuxqz4eEWces6JDOAx.2nRnbNx3R40NK4nAMnZ17TFgT8m0yVq', 1),
    ('user', 'user@gmail.com', '$2y$10$bFR1XATfuO.duGieAkmtxOBRANJb/y3FEXnUhXA9cZLoVhy8RQHEO', 2);


INSERT INTO events (id_event, title, description, image) VALUES 
    ('1','Mi primer evento','Probando sistema de html dinamico','Imagen.jpg')
