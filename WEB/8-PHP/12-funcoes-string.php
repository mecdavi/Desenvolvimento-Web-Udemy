<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $nome = 'david';
            // letras minusculas = toLowerCase
            strtolower($nome);

            // letras maiusculas = toUpperCase
            strtoupper($nome);

            // camelcase
            ucfirst($texto);

            // length
            strlen($nome);

            // encontrar d e substituir por c
            str_replace('d','c',$nome);

            // inicia em e quantidade de caracteres.
            substr($nome, 2 , 2);
            
            
            
        ?>
    </body>
</html>
