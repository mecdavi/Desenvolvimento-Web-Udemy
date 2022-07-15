<?php 
  require_once('validador_acesso.php');
?>
<?
  $arquivo = fopen('../App_help_desk/arquivo.hd','r');
  $registros = array();

  while(!feof($arquivo)){
    $linhas = fgets($arquivo);
    $chamado_id = explode("#",$linhas);
    if($_SESSION['perfil_id'] == 2){
      if($_SESSION['id'] == $chamado_id[0]){
        $registros[] = $linhas;
      }
    }else{
      $registros[] = $linhas;
    }
  }
  
  fclose($arquivo);

  
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      nav ul li a:hover::before{
        content: 'Sair';
        background-color: #007bff;
        margin: 0px 10px;
        padding: 0px 15px;
        border-radius: 5px;
        font-weight: 700;
      }
    </style>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="./home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php"><i class="fa-solid fa-arrow-right-from-bracket fa-1x"></i></a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <? foreach($registros as $registro) {
                $chamado = explode('#',$registro);
                /* if($_SESSION['perfil_id']==2){
                   if($_SESSION['id'] != $chamado[0]){
                     continue;
                   }
                   }*/
                if(count($chamado) < 3 ){
                  continue;
                }

              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado[1]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado[2] ?></h6>
                  <p class="card-text"><?= $chamado[3] ?></p>
                </div>
              </div>
              <? } ?>
              <div class="row mt-5">
                <a class="col-6 nav-link" href="home.php">
                  <button class="btn btn-lg btn-warning btn-block" type="button">Voltar</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>