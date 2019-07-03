<?php

include 'database.php';

$nome = $_POST['nome'];
$data = $_POST['data_nascimento'];
$cep = $_POST['cep'];
$endereco = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];


$query = "INSERT INTO aluno(id_aluno, nome, data_nascimento, cep, rua, numero, bairro, cidade, estado, criacao) values (default, '$nome', '$data', '$cep', '$endereco', $numero, '$bairro', '$cidade', '$estado', default)";

$executar = mysqli_query($conexao, $query);
header('location:index.php?pagina=alunos');
