<?php
//conexao com o banco
$dsn = 'mysql:host=localhost;dbname=gestor_conteudo';
$usuario = 'root';
$senha = '';
//tratando erro com PDO
 try{
    $conexao = new PDO($dsn,$usuario,$senha);

    /*$query = '
     delete from tb_usuarios
     ';
    $retorno = $conexao->exec($query);
    echo $retorno;*/
        
    }

 catch(PDOException $e){
  echo'ERRO'.$e->getcode().'mensagem'.$e->getmessage();
  //registro do erro 
 }

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>GESTOR DE CONTEUDO FAEPI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Iconic CSS -->
    <link href="bootstrap/iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="bootstrap/fontawesome/css/all.css">






</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">GESTOR DE CONTEUDO FAEPI</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="https://www.faepi.edu.br/"><img src="img/faepi logo.png" width="40px"></a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">


                        <li class="nav-item ">

                            <a class="nav-link active" href="#">
                                <span data-feather="home" class="fas fa-home"></span> Inicio<span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file" class="fas fa-file-alt"></span> Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart" class="fas fa-images"></span> Midias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="novo_curso.php">
                                <span data-feather="users" class="fas fa-solar-panel"></span> Cursos
                            </a>
                        </li>


                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Configurações</span>
                            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="fas fa-user-friends"></span> Usuarios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="fas fa-times-circle"></span> Sair
                                </a>
                            </li>


                        </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Gerenciamento do site </h1>
                      
                </div>


              
                

            </main>



        </div>

    </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>