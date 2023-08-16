CREATE DATABASE Formulario;
USE Formulario;

CREATE TABLE tbCliente(
	CodCliente INT NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(100) NOT NULL,
	Sobrenome VARCHAR(100) NOT NULL,
	Email VARCHAR(100) NOT NULL,
	CPF CHAR(14) NOT NULL UNIQUE KEY,
	Sexo VARCHAR(30) NOT NULL,
	Usuario VARCHAR(50) NOT NULL,
	Senha VARCHAR(10) NOT NULL,
	PRIMARY KEY (CodCliente)
);