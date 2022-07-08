<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $vetor = [2,5,6,8,7,9,8];

            // $idx indice 
            // $i valor do índice
            foreach($vetor as $idx => $i){
                echo $i;
                echo '<br>';
                echo $idx;
            }


        ?>
    </body>
</html>
