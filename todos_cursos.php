<?php
$acao = 'recuperar';
require 'curso_controller.php';
echo '<prev>';
print_r($cursos);
echo '</prev>';

?>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cursos Cadastrados</title>

		<link rel="stylesheet" href="bootstrap/css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
			<script>
			//script de editar
			function editar(id, txt_curso){
				//criar um form de edição
				let form = document.createElement('form')
				form.action = 'curso_controller.php?acao=atualizar'
				form.method = 'post'
				form.className = 'row'
				//criar um input para entrada do texto
				let inputCurso = document.createElement('input')
				inputCurso.type='text'
				inputCurso.name='curso'
				inputCurso.className = 'col-9 form-control'
				inputCurso.value = txt_curso
				//criar input um  hidden para guardar o id do curso
				let inputId = document.createElement('input')
				inputId.type = 'hidden'
				inputId.name = 'id'
				inputId.value = 'id'

				//criar um button para envio do form
				let button = document.createElement('button')
				button.type = 'submit'
				button.className = 'col-3 btn btn-info'
				button.innerHTML = 'atualizar'

				//inclui inputId no form
				form.appendChild(inputId)
				

				//incluir inputcurso no form
				form.appendChild(inputCurso)
				//incluir buttom no form
				form.appendChild(button)
				//selecionar a div tarefa
				let curso = document.getElementById('curso_'+id)
				//limpar o texto da tarefa para inclusao do form

				curso.innerHTML = ''
				//incluir form na pagina
				curso.insertBefore(form, curso[0])

			}
		</script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">
				<div class="col-sm-3 menu">
					<ul class="list-group">
						
						<li class="list-group-item"><a href="novo_curso.php">Novo curso</a></li>
						<li class="list-group-item active"><a href="#">Todos os Cursos</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todos os Cursos</h4>
								<hr />
										
								<?php foreach($cursos as $indice => $curso) { ?>
									<div class="row mb-3 d-flex align-items-center tarefa">
										<div class="col-sm-9"  id="curso_<?=  $curso->id ?>">
											<?php echo $curso->curso ?> (<?php echo $curso->id_status ?>)
										</div>
										<div class="col-sm-3 mt-2 d-flex justify-content-between">
											<i class="fas fa-trash-alt fa-lg text-danger"></i>
											<i class="fas fa-edit fa-lg text-info" onclick="editar(<?=  $curso->id ?>,'<?=  $curso->curso ?>')"></i>
											<i class="fas fa-check-square fa-lg text-success"></i>
										</div>
									</div>

								<?php } ?>

								
								</div>
							</div>
							
						</div>
						
					</div>
					
				
			</div>
			
		</div>

		
	</body>
</html> 
