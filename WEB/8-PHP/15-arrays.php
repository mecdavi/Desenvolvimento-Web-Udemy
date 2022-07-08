<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $lista = ['morango', 'uva', 'banana'];

            // adicionar items ao array, = push do js
            $lista[] = 'laranja';
            // verificar array var_dumb()
            // print_r = simplificado

            // echo '<pre>' usado para melhorar a visualização do array
            echo '<pre>';
            var_dump($lista);
            echo '/<pre>';

            // associar qualquer coisa aos valores do array
            $associarLista = ['2,50' => 'morango', '5'=> 'ava','6' => 'banana'];
            $associarLista ['7'] = 'laranja';
            echo '<pre>';
            var_dump($associarLista);
            echo '/<pre>';
            
            
            

        ?>
    </body>
</html>
