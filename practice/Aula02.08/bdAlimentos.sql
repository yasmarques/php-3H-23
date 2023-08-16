create database dbAlimentos CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbAlimentos;

create table tbAlimentos(
codAlim int not null auto_increment,
nomeAlim varchar(100),
qtdAlim tinyint(10),
precoAli DECIMAL(5,2),
primary key(codAlim))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;