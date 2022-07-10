<?php
    session_start();

    $usuarios_autenticado = false;

    $usuarios_app = array(
        // informações passadas pelo front = name
        array('email' => 'david.eduard86@gmail.com' , 'senha' => 'bichano'),
        array('email' => 'david', 'senha' => 'boiadinho'),
    );
    // processo de autenticação do usuário
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_autenticado = true;
        };
    };
    
    // login=erro -> passando dados do back para front usando o get

    if($usuarios_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        // print 'Bem vinde';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
    
?>