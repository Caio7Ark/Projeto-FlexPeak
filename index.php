<?php



#BANCO DE DADOS DO PROJETO
include 'database.php';


#CONTEÚDO DA PÁGINA

if (isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

if ($pagina == 'alunos'){
	include 'alunos.php';
}
else if ($pagina == 'cadastro_aluno'){
	include 'registro.php';
}

else if ($pagina == 'cursos'){
	include 'cursos.php';
}
else if ($pagina == 'professores'){
	include 'professores.php';
}
else{
	include 'home.php';
}