<?php 
  require_once('validador_acesso.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
      .card-home {
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

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="./abrir_chamado.php" class="text-center nav-link text-info">
                    <img src="formulario_abrir_chamado.png " class="mb-1" width="70" height="70">
                    <h5>Abrir chamado</h4>
                    <!-- <div class="align-self-end" style="border:1px solid; margin: auto 0;">Abrir Chamado</div> -->
                  </a>
                </div>
                  <div class="col-6 d-flex justify-content-center">
                    <a href="./consultar_chamado.php" class="text-center nav-link text-info">
                      <img src="formulario_consultar_chamado.png" class="mb-1" width="70" height="70">
                      <h5>Consultar chamado</h5>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>