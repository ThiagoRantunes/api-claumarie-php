CREATE DATABASE claumarie_data;

USE claumarie_data;

CREATE TABLE usuarios(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(20),
    acesso INT
);