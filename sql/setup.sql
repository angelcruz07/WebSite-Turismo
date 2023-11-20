-- Active: 1700014601609@@127.0.0.1@3306@tourism

DROP DATABASE IF EXISTS tourism;

CREATE DATABASE tourism;

USE tourism;

CREATE TABLE
    roles (
        id INT AUTO_INCREMENT PRIMARY KEY,
        rol VARCHAR(255)
    );

CREATE TABLE
    users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255),
        email VARCHAR(255) UNIQUE,
        password VARCHAR(255),
        rol_id INT,
        CONSTRAINT rol_id FOREIGN KEY (rol_id) REFERENCES roles(id)
    );

CREATE TABLE
    events (
        id INT AUTO_INCREMENT PRIMARY KEY,
        type VARCHAR(255) NOT NULL,
        title VARCHAR(255),
        description VARCHAR(512),
        date TIMESTAMP,
        image VARCHAR(3000)
    );

CREATE TABLE
    blog (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255),
        description VARCHAR(255),
        date TIMESTAMP,
        image VARCHAR(3000)
    );

CREATE TABLE
    request(
        id INT AUTO_INCREMENT PRIMARY KEY,
        business_type VARCHAR(255),
        business VARCHAR(255) NOT NULL,
        business_image VARCHAR(3000),
        description VARCHAR(255) NOT NULL,
        product_type VARCHAR(255),
        product_image VARCHAR(255),
        name VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        phone_number VARCHAR(255) NOT NULL,
        status VARCHAR(255) NOT NULL
    );

CREATE TABLE
    lodging (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        phone_number VARCHAR(255) NOT NULL,
        location VARCHAR(255) NOT NULL,
        image VARCHAR(3000)
    );

CREATE TABLE
    business (
        id INT AUTO_INCREMENT PRIMARY KEY,
        type VARCHAR(255) NOT NULL,
        name VARCHAR(255) NOT NULL,
        description VARCHAR(255),
        phone_number VARCHAR(255),
        location VARCHAR(255),
        image VARCHAR(3000)
    );

CREATE TABLE
    gastronomy(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        type VARCHAR(255) NOT NULL,
        name VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        image VARCHAR(3000) NOT NULL
    );

CREATE TABLE
    services(
        id INT AUTO_INCREMENT PRIMARY KEY,
        type VARCHAR(255),
        availability VARCHAR(255),
        scheduls VARCHAR(255),
        route VARCHAR(255),
        image VARCHAR(3000)
    );

CREATE TABLE
    gallery (
        id INT AUTO_INCREMENT PRIMARY KEY,
        type VARCHAR(255) NOT NULL,
        name VARCHAR(255) NOT NULL,
        description VARCHAR(255) NOT NULL,
        location VARCHAR(255) NOT NULL,
        image VARCHAR(255) NOT NULL
    );

--Insert  fields into the roles table.

INSERT INTO roles (id, rol) VALUES (1, 'admin'), (2, 'colaborador');

-- Insert fields into the users table.

-- The password for admin is admin.

-- The password for user is user.

INSERT INTO
    users (
        username,
        email,
        password,
        rol_id
    )
VALUES (
        'admin',
        'admin@gmail.com',
        '$2y$10$WsSVuxqz4eEWces6JDOAx.2nRnbNx3R40NK4nAMnZ17TFgT8m0yVq',
        1
    ), (
        'user',
        'user@gmail.com',
        '$2y$10$bFR1XATfuO.duGieAkmtxOBRANJb/y3FEXnUhXA9cZLoVhy8RQHEO',
        2
    );
