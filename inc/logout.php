<?php
// Esse é o logout.php
include("../config.php");

try {
    session_start(); // Inicia a sessão ou acessa a sessão existente
    session_destroy(); // Destrói a sessão limpando todos os valores salvos

    // Direciona para o index do site
    header("Location: " . BASEURL . "index.php");
    exit(); // Certifica que o script não continue após o redirecionamento
} catch (Exception $e) {
    $_SESSION['message'] = "Ocorreu um erro: " . $e->getMessage();
    $_SESSION['type'] = "danger";
}
?>
