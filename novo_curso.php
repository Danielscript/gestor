<html>
	
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>cursos</title>
	
		<link rel="stylesheet" href="bootstrap/css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo.png" width="30" height="30"  alt=""> 
					
				</a>
			</div>
		</nav>
		
	
			<script>
function funcao()
{
var x;
//recebemos o valor do botão pressionado ok ou cancelar em uma variavel
var r=confirm("Cadastro!");
if (r==true)
  {
  x="com sucesso!";
  }
else
  {
  x=" Cancelado!";
  }
document.getElementById("demo").innerHTML=x;
}
</script>
			
		
		
		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						
						<li class="list-group-item active"><a href="#">Novo curso</a></li>
						<li class="list-group-item"><a href="todos_cursos.php">Todos os Cursos</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Cadastro de Curso</h4>
								<hr />

								<form  method="POST" action="curso_controller.php?acao=inserir">
								
									<div class="form-group">
										<label>Nome do Curso:</label>
										<input type="text" class="form-control"  name="nome"   placeholder="Exemplo: escreve o nome do curso aqui">
									</div>
							

									<!--<button type="submit" id="enviacurso" class="btn btn-success">Cadastrar</button>-->
									<input type="submit"   class="btn btn-success" onclick="funcao()" value="Cadastrar">
								<button  class="btn btn-success"><a style="color:blanchedalmond" href="index.php">Voltar</a></button>
								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

	</body>
</html>