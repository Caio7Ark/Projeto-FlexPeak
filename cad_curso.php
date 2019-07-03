<?php

include 'database.php';

$nome = $_POST['nome'];

$query = "INSERT INTO curso(id_curso, nome, criacao) values (default, '$nome', default)";

$executar = mysqli_query($conexao, $query);
header('location:index.php?pagina=cursos');