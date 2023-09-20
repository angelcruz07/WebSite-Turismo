DROP DATABASE IF EXISTS users;

CREATE DATABASE users;

USE users;

CREATE TABLE roles ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    rol VARCHAR(20)
);

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50), 
    email VARCHAR(30),
    password VARCHAR(10),
    rol_id INT(2),
    CONSTRAINT fk_rol_id FOREIGN KEY (rol_id) REFERENCES roles(id)
);

--Insertar los roles existentes en la tabla
INSERT INTO roles (id, rol) VALUES  (1 , 'admin');
INSERT INTO roles (id, rol) VALUES  (2 , 'colaborador');

-- Comando para insertar usuarios de prueba en la tabla users
INSERT INTO users (name, email, password, rol_id)
VALUES ('admin', 'admin@gmail.com', 'admin', 1);

INSERT INTO users (name, email, password, rol_id)
VALUES ('colaborador', 'admin@gmail.com', 'cola', 0);
INSERT INTO users (name, email, password, rol_id)
VALUES ('test', 'test@gmail.com', 'test', 0);

