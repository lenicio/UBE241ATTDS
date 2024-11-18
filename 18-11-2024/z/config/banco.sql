create database z;

use z;

create table usuarios (
	id int auto_increment,
    nome varchar(250) not null,
    email varchar(250) not null unique,
    senha varchar(60) not null,
    primary key (id)
);