<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Curso de php</title>
    </head>
    <body>
        <?php 
            // igual no js
            $idade = 12;
            
            switch($idade){
                case 11:
                    echo "false";
                    break;
                case 12:
                    echo 'true';
                    break;
                default:
                    echo 'padrão';
                    break;
            }
        
        ?>
    </body>
</html>
