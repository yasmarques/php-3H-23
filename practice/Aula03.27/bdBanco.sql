CREATE DATABASE proleotario;
USE proleotario;

CREATE TABLE tbOtario(
	CodCliente INT NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(100) NOT NULL,
	Sobrenome VARCHAR(100) NOT NULL,
	CPF CHAR(14) NOT NULL UNIQUE KEY,
	Salario decimal(6,2) NULL,
    TotalVenda decimal(6,2) NULL,
    TaxaComissao decimal(2,2) NULL,
    PrecoHoras decimal(5,2) NULL,
    HorasTrabalhadas tinyint (4) NULL,
    PRIMARY KEY (CodCliente)
);