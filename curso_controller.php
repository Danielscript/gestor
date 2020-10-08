<?php

require "../../app_list_curso/curso.model.php";
require "../../app_list_curso/curso.service.php";
require "../../app_list_curso/conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
if( $acao == 'inserir'){
$curso = new Curso();
$curso->__set('curso', $_POST['nome']);
//instacia de conexao
$conexao = new Conexao();

$cursoservice = new CursoService($conexao, $curso);
$cursoservice->inserir();
/*echo '<prev>';
print_r($cursoservice);
echo '</prev>';*/
header('Location: novo_curso.php?inclusao=1');
}else if($acao == 'recuperar'){
  $curso =  new Curso();
  $conexao = new Conexao();

  $cursoService = new CursoService($conexao, $curso);
  $cursos = $cursoService->recuperar();

}
else if($acao == 'atualizar'){
  $curso = new Curso();
  $curso->__set('id',$_POST['id']);
  $curso->__set('curso', $_POST['curso']);

  $conexao = new Conexao();

  $cursoService = new CursoService($conexao, $curso);
  
 if($cursoService->atualizar()){
   header('location: todos_cursos.php');
 }



}
?>
