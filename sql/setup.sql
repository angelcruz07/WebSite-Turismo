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
    password VARCHAR(10),
    rol_id INT(2),
    CONSTRAINT rol_id FOREIGN KEY (rol_id) REFERENCES roles(id)
);


CREATE TABLE events (
     id_event INT(11) AUTO_INCREMENT PRIMARY KEY,
     image LONGBLOB,
     title VARCHAR(25),
     description VARCHAR(250)
)

--Insertar los roles existentes en la tabla
INSERT INTO roles (id, rol) VALUES  
(1 , 'admin'),
(2 , 'colaborador');

-- Comando para insertar usuarios de prueba en la tabla users
INSERT INTO users (username, email, password, rol_id)VALUES 
('test', 'test@gmail.com', 'test', 2);

-- ('test', 'test@gmail.com', 'test', 0);
-- ('admin', 'admin@gmail.com', '$2y$10$lKz', 1),
-- ('admin', 'admin@gmail.com', '$2y$10$lKz', 1)
