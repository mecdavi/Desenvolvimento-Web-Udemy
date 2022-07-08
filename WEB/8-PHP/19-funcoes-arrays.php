<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            $array1 = [1=>25,2=>78,3=>56];
            $array2 = [2,3,4];
            $texto = 'a,b,c,d,e,f,g,h';
            // retorna true or false se o valor é um array
            echo is_array($array1);
            echo '<br>';

            // extrai as chaves dos valores dos indices
            echo '<pre>';
            var_dump(array_keys($array1));
            echo '</pre>';
            echo '<br>';

            //ordena os indices crescentes
            echo '<pre>';
            sort($array1);
            print_r($array1);
            echo '</pre>';
            echo '<br>';
            
            // ordena os valores masm mantem os indices antigos
            echo '<pre>';
            asort($array1);
            print_r($array1);
            echo '</pre>';
            echo '<br>';

            // conta a quantidade de indices do array
            echo '<pre>';
            print_r(count($array1));
            echo '</pre>';
            echo '<br>';
            
            
            // une dois arrays, ou mais
            echo '<pre>';
            print_r(array_merge($array1,$array2));
            echo '</pre>';
            echo '<br>';

            // transforma um string em array, depende de um delimitador
            echo '<pre>';
            print_r(explode(',',$texto));
            echo '</pre>';
            echo '<br>';

            // transforma array em string
            echo '<pre>';
            print_r(implode(',',$array1));
            echo '</pre>';
            echo '<br>';

            
        ?>
    </body>
</html>
