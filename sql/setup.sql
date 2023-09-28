-- Active: 1695851160752@@127.0.0.1@3306@users

-- Run SQL commands in order

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
     id_event INT(11) AUTO_INCREMENT PRIMARY KEY,
     image LONGBLOB,
     title VARCHAR(25),
     description VARCHAR(250)
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
