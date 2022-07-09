<?php
    session_start();
     


    $usuarios_autenticado = false;

   $usuarios_app = array(
    array('email' => 'david.eduard86@gmail.com' , 'senha' => 'gmail.cola'),
    array('email' => 'david', 'senha' => 'boiadinho'),
   );

   foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuarios_autenticado = true;
        };
    };
    $usuarios_autenticado ? print'bem vinde': header('location: index.php?login=erro');
?>