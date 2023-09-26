DROP DATABASE IF EXISTS users;

CREATE DATABASE users;

USE users;

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
    CONSTRAINT fk_rol_id FOREIGN KEY (rol_id) REFERENCES roles(id)
);

--Insertar los roles existentes en la tabla
INSERT INTO roles (id, rol) VALUES  
(1 , 'admin'),
(2 , 'colaborador');

-- Comando para insertar usuarios de prueba en la tabla users.

-- La contraseña para admin es admin y para user es user.
INSERT INTO users (username, email, password, rol_id) VALUES 
('admin', 'admin@gmail.com', '$2y$10$zgk', 1),
('user', 'user@gmail.com', '$2y$10$Lk2', 2);

