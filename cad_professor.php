<?php

include 'database.php';

$nome = $_POST['nome'];
$data = $_POST['data_nascimento'];

$query = "INSERT INTO professor(id_professor, nome, data_nascimento, criacao) values (default, '$nome', '$data', default)";

$executar = mysqli_query($conexao, $query);
header('location:index.php?pagina=professores');