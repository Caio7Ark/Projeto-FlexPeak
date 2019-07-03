<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "teste";

$conexao = mysqli_connect($server, $user, $pass, $database);


#TABELA DE ALUNO
$query = "CREATE TABLE alunos(
	id_aluno int not null auto_increment,
	nome varchar(50) not null,
	data_nascimento date not null,
	endereco varchar(50) not null,
	numero int (5) not null,
	bairro varchar(30) not null,
	cidade varchar(30) not null,
	estado varchar (20) not null,
	criacao datetime not null,
	primary key (id_aluno)
)";

#TABELA DE CURSOS
$query = "CREATE TABLE cursos(
	id_curso int not null auto_increment,
	nome varchar (50) not null,
	criacao datetime not null,
	primary key (id_curso)
)";

#TABELA DE PROFESSORES
$query = "CREATE TABLE professores(
	id_professor int not null auto_increment,
	nome varchar(50) not null,
	data_nascimento date not null,
	criacao datetime not null,
	primary key (id_professor)
)";


#CRIAR DATABASE DE TESTE

$query = "CREATE DATABASE teste";

$query = "CREATE TABLE aluno(
	id_aluno int not null auto_increment,
	nome varchar(50) not null,
	rua varchar (30) not null,
	primary key (id_aluno)
)";
$query = "CREATE TABLE curso(
	id_curso int not null auto_increment,
	nome  varchar (50) not null,
	primary key (id_curso)
)";
#`criacao` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `nome`;

$query = "CREATE TABLE professor(
	id_professor int not null auto_increment,
	nome varchar(50) not null,
	data_nascimento date not null,
	criacao datetime not null default CURRENT_TIMESTAMP,
	primary key (id_professor)
)";
$executar = mysqli_query($conexao, $query);

$query = "SELECT * FROM aluno";
$consulta_aluno = mysqli_query($conexao, $query);
$query = "SELECT * FROM curso";
$consulta_curso = mysqli_query($conexao, $query);
$query = "SELECT * FROM professor";
$consulta_professor = mysqli_query($conexao, $query);

