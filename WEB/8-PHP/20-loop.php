<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $num = 1;
            while($num < 10){
                echo $num . ' ';
                $num++;
            }

            echo $num;

            do{
                echo $num .' ';
                $num++;
            }while($num <= 20);

            for($i = 1 ; $num <= 30 ; $i++){
                $num = $num + $i;
                echo $num .' ';

            }
            
            $registros = ['Título Notícias 1','Título Notícias 2','Título Notícias 3','Título Notícias 4'];

            $idx = 0;
            echo "<br>";
            echo "<br>";
            $registros[] = 'Título Notícia 5';
            // mostra o ultimo indice do array
            while($idx <= array_key_last($registros)){
                echo $registros[$idx];
                echo "<hr>";
                echo "<br>";
                $idx++;
            }

            $idx = 0;
            echo "<br>";
            echo "<br>";

            do{
                echo $registros[$idx];
                echo "<hr>";
                echo "<br>";
                $idx++;

            }while($idx <= array_key_last($registros));

            echo "<br>";
            echo "<br>";

            for($i = 0; $i<=array_key_last($registros);$i++){
                echo $registros[$i];
                echo "<hr>";
                echo "<br>";
            }


        ?>
    </body>
</html>
