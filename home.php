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
          		<li class="nav-item active mx-0 mx-lg-1">
            	<a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="?pagina=home">Home</a>
          		</li>
          		<li class="nav-item mx-0 mx-lg-1">
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
	<div style="margin-top: 100px;padding: 200px;background-image:url('img/bg.jpg');background-repeat:no-repeat;background-attachment:fixed; background-size: cover !important; color: white; text-shadow: 1px 1px 1px #000; margin-bottom:20px; text-align: center;">
		<h1>Seja bem-vindo ao Sistema de Cadastro da FlexPeak</h1>
		<h4>Cadastre, consulte e faça as alterações no banco de dados</h4>
	</div>
	<div class="container">
	<div class="row">
		<!-- CARD DE ALUNO-->
		<div class="col-md-6 col-lg-4">
			<div class="card" style="width: 23rem;height:26rem">
			  	<img src="img/aluno.png" class="card-img-top rounded rounded-circle rounded mx-auto d-block" alt="..." style="width: 300px; height: 250px; padding: 20px">
			  	<div class="card-body">
				    <h4 class="card-title">Alunos</h4>
				    <p class="card-text">Cadastro de novos alunos</p>
				    <!--<a class="btn btn-primary btn-block text-uppercase" href="?pagina=cadastro_aluno" role="button" style="padding: 10px;background-color: #1d3359;">Cadastrar Aluno</a>-->
				    <button type="button" class="btn btn-primary btn-block text-uppercase" style="padding: 10px;background-color: #1d3359;" data-toggle="modal" data-target="#aluno">Cadastrar aluno</button>
				</div>
			</div>
		</div>
		<!--FIM DO CARD-->
		<!--CARD DE CURSO-->
		<div class="col-md-6 col-lg-4">
			<div class="card" style="width: 23rem;height: 26rem">
				<img src="img/curso.png" class="card-img-top rounded mx-auto d-block" style="width: 300px; height: 250px; padding:20px">
				<div class="card-body">
					<h4 class="card-title">Cursos</h4>
					<p class="card-text">Cadastro de novos cursos</p>
					<button type="button" class="btn btn-primary btn-block text-uppercase" style="padding: 10px;background-color: #1d3359;" data-toggle="modal" data-target="#curso">Cadastrar curso</button>
				</div>
			</div>
		</div>
		<!--FIM DO CARD-->
		<!-- CARD DE PROFESSOR-->
		<div class="col-md-6 col-lg-4">
			<div class="card" style="width: 23rem;height: 26rem">
				<img src="img/professor.jpg" class="card-img-top rounded mx-auto d-block" style="width: 300px; height: 250px; padding: 20px">
				<div class="card-body">
			    <h4 class="card-title">Professores</h4>
			    <p class="card-text">Cadastro de novos professores</p>
			    <button type="button" class="btn btn-primary btn-block text-uppercase" style="padding: 10px;background-color: #1d3359;" data-toggle="modal" data-target="#professor">Cadastrar professor</button>
				</div>
			</div>
		</div>
		<!--FIM DO CARD-->
	</div>
	</div>
				
		<!-- MODAL DE ALUNO -->
		<form method="post" action="cad_aluno.php">
		<div class="modal fade" id="aluno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Curso</h5>
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
		<!-- FIM DO MODAL-->
 		
		<!-- MODAL DE CURSO -->
		<div class="modal fade" id="curso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		   		<div class="modal-content">
		      	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel">Cadastro de Curso</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
		          	<span aria-hidden="true">&times;</span></button>
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
		<!-- FIM DO MODAL-->

		<!-- MODAL DE PROFESSOR -->
		<div class="modal fade" id="professor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		     	<div class="modal-header">
		        	<h5 class="modal-title" id="exampleModalLabel">Cadastro de Professor</h5>
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
		          	<span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<form method="post" action="cad_professor.php">
		      	<div class="modal-body">
		            <div class="form-group">
		              	<label>Nome:</label>
		              	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
		            </div>
		            <div class="form-group">
		            	<label>Data de Nascimento:</label>
		              	<input type="date" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="">
		            </div>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="submit" class="btn btn-primary" style="background-color: #1d3359">Cadastrar Professor</button>
		      	</div>
		      	</form>
		    	</div>
		  	</div>
		</div>
		<!-- FIM DO MODAL -->

<footer class="" style="height: 100px; background-color: #e3e3e3; padding: 30px; margin: 15px 0 0 0">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
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