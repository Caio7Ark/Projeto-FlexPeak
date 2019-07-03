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
          		<li class="nav-item active mx-0 mx-lg-1">
           	 	<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?pagina=alunos">Alunos</a>
          		</li>
          		<li class="nav-item mx-0 mx-lg-1">
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
  <div class="container">
    <h1 class="text text-center text-uppercase"style="margin-top: 120px">Lista de alunos</h1>
    <div class="row ">
      <div class="col-lg-3 col-sm-6 mb-1">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aluno" style="background-color: #1d3359">Cadastrar novo aluno</button>
      </div>
      <div class="col-lg-3 col-sm-6 mb-1">
        <a class="btn btn-primary mb-3 mx-lg-4" href="?pagina=cadastro_aluno" role="button" style="background-color: #1d3359">Gerar PDF</a>
      </div>
    </div>
    <form method="post" action="cad_aluno.php">
      <div class="modal fade" id="aluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Cadastro de Aluno</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span></button>
            </div>


            <div class="modal-body">
              <div class="form-group">
                <label>Nome Completo:</label>
                <input type="text" class="form-control" name="nome" placeholder="Nome">
              </div>
              <div class="form-group">
                <label>Data Nascimento:</label>
                <input type="date" class="form-control" name="data_nascimento" placeholder="">
              </div>
              <form method="get" action=".">
              <div class="row">
                <div class="col-4">
                  <div class="form-group">  
                    <label>CEP:</label>
                    <input name="cep" type="text" id="cep" value=""class="form-control" placeholder="Ex: 12345-678">
                  </div>
                </div>
                <div class="col-8">
                  <div class="form-group">  
                    <label>Endereço:</label>
                    <input name="rua" type="text" id="rua"class="form-control" placeholder="Ex: Rua A">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <div class="form-group">
                    <label>Número:</label>
                    <input type="text" class="form-control" name="numero" placeholder="Nº">
                  </div>
                  </div>
                <div class="col-4">
                  <div class="form-group">  
                    <label>Bairro:</label>
                    <input name="bairro" type="text" id="bairro" class="form-control" placeholder="Bairro">
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label>Cidade:</label>
                    <input name="cidade" type="text" id="cidade" class="form-control" placeholder="Cidade">
                  </div>
                </div>
                <div class="col-2">
                  <div class="form-group">
                  <label>UF:</label>
                  <input name="uf" type="text" id="uf" class="form-control" placeholder="Estado">
                  </div>
                </div>
              </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" style="background-color: #1d3359">Cadastrar aluno</button>
            </div>
            </div>

            </div>
            </div>
            </form>
            <table class="table table-bordered table-striped">
             <thead>
                <tr class="text-center">
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Data de Nascimento</th>
                  <th scope="col">CEP</th>
                  <th scope="col">Endereço</th>
                  <th scope="col">Número</th>
                  <th scope="col">Bairro</th>
                  <th scope="col">Cidade</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Data de Criação</th>

                  


                </tr>
              </thead>
              <tbody class="text-uppercase">

              <?php 
              while ($linha = mysqli_fetch_array($consulta_aluno)){
                echo '<tr><td>'.$linha['id_aluno'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
                echo '<td>'.$linha['cep'].'</td>';
                echo '<td>'.$linha['rua'].'</td>';
                echo '<td>'.$linha['numero'].'</td>';
                echo '<td>'.$linha['bairro'].'</td>';
                echo '<td>'.$linha['cidade'].'</td>';
                echo '<td>'.$linha['estado'].'</td>';
                echo '<td>'.$linha['criacao'].'</td>';
              }
              ?> </tbody> 
            </table>
          </div>
   
    <footer style="height: 100px; background-color: #e3e3e3; padding: 30px; margin: 15px 0 0 0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

    <div class="container text-center" >
      Desenvolvido por Caio Pinto
    </div>
    </footer>

</body>
</html>