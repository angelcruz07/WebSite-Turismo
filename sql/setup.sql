<<<<<<< HEAD
-- Active: 1695851160752@@127.0.0.1@3306@tourism
=======
-- Active: 1696112272292@@127.0.0.1@3306@tourism
>>>>>>> 4890c9b0fb3157b420cd18116a6ce786c6740e2b

DROP DATABASE IF EXISTS tourism;

CREATE DATABASE tourism; 

USE tourism;

CREATE TABLE roles ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    rol VARCHAR(20)
);

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50), 
    email VARCHAR(30),
    password VARCHAR(250),
    rol_id INT(2),
    CONSTRAINT rol_id FOREIGN KEY (rol_id) REFERENCES roles(id)
);

CREATE TABLE events (
     id INT(11) AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(25),
     description VARCHAR(250),
     image VARCHAR(3000)
);

CREATE TABLE blog (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title  VARCHAR(25),
    description VARCHAR(250), 
    image VARCHAR(3000)
);

CREATE TABLE lodging (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description VARCHAR(250),
    social_networks VARCHAR(250),
    images VARCHAR(3000)
)


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
