<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header>
		<nav class="navbar navbar-expand-lg navbar-dark text-uppercase font-weight-bold fixed-top" style="background-color:#3a5f9c;">
    	<div class="container">
    		<img src="img/logo.png" style="width: 100px; height: 90px">
      		<a class="navbar-brand js-scroll-trigger ml-3" href="?pagina=home">Sistema de cadastro</a>
      		<button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold text-white rounded" type="button" data-toggle="collapse" data-target="#Barra" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #1d3359">Menu</button>
     	<div class="collapse navbar-collapse" id="Barra">
        	<ul class="navbar-nav ml-auto">
          		<li class="nav-item mx-0 mx-lg-1">
            	<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?pagina=home">Home</a>
          		</li>
          		<li class="nav-item mx-0 mx-lg-1">
           	 	<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?pagina=alunos">Alunos</a>
          		</li>
          		<li class="nav-item active mx-0 mx-lg-1">
            	<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?pagina=cursos">Cursos</a>
          		</li>
          		<li class="nav-item mx-0 mx-lg-1">
           		<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?pagina=professores">Professores</a>
          		</li>
        	</ul>
        </div>
   		</div>
    </nav>
  </header>
          <h1 class="text text-center text-uppercase" style="margin-top: 120px">Lista de Cursos</h1>
<div class="container">
  <!-- Botão para acionar modal -->
<button class="btn btn-primary mb-3 mx-lg-4" data-toggle="modal" data-target="#professor" href="?pagina=home" style="background-color: #1d3359 ; margin:20px">Cadastrar novo curso</button>

<!-- Modal -->

  <div class="modal fade" id="curso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="cad_curso.php">
      <div class="modal-body">
      
            <div class="form-group">
              <label>Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" style="background-color: #1d3359">Cadastrar curso</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <!--<div class="btn btn-primary mb-3 mx-lg-4" data-toggle="modal" data-target="#Curso" style="background-color: #1d3359">Cadastrar novo curso</button>
  </div>
          <div class="modal fade" id="Curso" tabindex="-1" role="dialog" aria-labelledby="modalCurso" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="TituloModalCurso">Cadastro de novos cursos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="cad_curso.php">
                    <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" style="background-color: #1d3359">Cadastrar</button>
                </div>
                  </form>
                </div>
              </div>
            </div>
            </div>-->
        </div>

         <div class="container">

            <table class="table table-bordered table-striped">
             <thead>
                <tr class="text-center">
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                   <th scope="col">Data de Criação</th>

                  
                </tr>
              </thead>
              <tbody class="text-uppercase text-center">
                <?php 
              while ($linha = mysqli_fetch_array($consulta_curso)){
                echo '<tr><td>'.$linha['id_curso'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['criacao'].'</td>';
              }
              ?>
            </tbody>
            </table>
          </div>

    <footer style="height: 100px; background-color: #e3e3e3; padding: 30px; margin: 15px 0 0 0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="container text-center" >
      Desenvolvido por Caio Pinto
    </div>
    </footer>

</body>
</html>