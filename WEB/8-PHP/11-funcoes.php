<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            function calcularArea($altura,$largura){
                
                return $altura * $largura;
            }

            echo calcularArea(5,6);
            echo '<br>';

            
            function calcularImposto($salario){
                if($salario <= 1903.98){
                    $imposto = 0.00;
                }else if(1903.99 <= $salario && $salario <= 2826.65){
                    $imposto = $salario * 0.075;
                }else if(2826.66 <= $salario && $salario <= 3751.05){
                    $imposto = $salario * 0.15;
                }else if(3751.06 <= $salario && $salario <= 4664.68){
                    $imposto = $salario * 0.225;
                }else if(4664.69 <= $salario){
                    $imposto = $salario * 0.275;
                }
                return $imposto;
            }
            echo calcularImposto(5000) . ' reais de imposto';

        ?>
    </body>
</html>
