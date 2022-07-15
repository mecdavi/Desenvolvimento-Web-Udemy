<?php 
    session_start();
    // destroi o array 
    session_destroy();
    header('Location: index.php');


?>