<?php 
    include('functions.php'); 

    if (isset($_POST['id'])){
        delete($_POST['id']);
    } else {
        die("ERRO: ID não definido.");
    }
?>