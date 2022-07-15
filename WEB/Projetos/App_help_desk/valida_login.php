<?php
    session_start();

    $usuarios_autenticado = false;
    $usuarios_id = null;
    $usuario_perfil = null;

    $perfis = array(1 => 'admin', 2 => 'User');

    $usuarios_app = array(
        // informações passadas pelo front = name
        array('id' => 1,'email' => 'david.eduard86@gmail.com' , 'senha' => 'bichano','perfil_id' => 1),
        array('id' => 2,'email' => 'david.teste@hotmail.com', 'senha' => '1234 ','perfil_id' => 2),
        array('id' => 3,'email' => 'maria.teste@hotmail.com', 'senha' => '1234', 'perfil_id' => 2),

    );
    // processo de autenticação do usuário
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_autenticado = true;
            $usuarios_id = $user['id'];
            $usuario_perfil = $user['perfil_id'];
        };
    };
    
    // login=erro -> passando dados do back para front usando o get

    if($usuarios_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuarios_id;
        $_SESSION['perfil_id'] = $usuario_perfil;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
    
?>