CREATE DATABASE crispet;

USE crispet;

CREATE TABLE usuarios(

id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(120),
senha VARCHAR(120)

);

INSERT INTO usuarios(email,senha)
VALUES('admin@crispet.com','123456');

CREATE TABLE contatos(

id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(120),
email VARCHAR(120),
telefone VARCHAR(30),
assunto VARCHAR(100),
mensagem TEXT

);