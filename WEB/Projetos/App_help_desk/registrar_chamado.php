<?php 
    session_start();

    foreach($_POST as $indice => $valor){
        $_POST[$indice] = str_replace('#','-',$valor);
    }

    $texto   = implode('#' ,$_POST) ;
    $texto = $_SESSION['id'] . '#' .  $texto . PHP_EOL;
    // cria um arquivo de texto do php e abre ele
    $arquivo = fopen('arquivo.hd', 'a');
    // escreve algo em um arquivo
    fwrite($arquivo, $texto);
    // fechando o arquivo
    fclose($arquivo);

    header('Location:abrir_chamado.php')
?>