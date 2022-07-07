<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $nome = 'mundo';
            echo'olá ' . $nome . ' !!!';

            // "" template string, mas não pula linhas, não precisa usar o concatenador
            echo '<br>';

            echo "olá $nome !!!"
            
        ?>
    </body>
</html>
