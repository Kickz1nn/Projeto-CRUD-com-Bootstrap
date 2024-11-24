<?php
session_start();
include('functions.php');

if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] === "admin" || $_SESSION['user'] === "user") {
        $_SESSION['message'] = "Você pode acessar esse recurso!";
        $_SESSION['type'] = "success";
    }
} else {
    $_SESSION['message'] = "Você não pode acessar esse recurso!";
    $_SESSION['type'] = "danger";
    header("Location: " . BASEURL . "index.php");
    exit(); // Certifique-se de que o código não continue após o redirecionamento
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Chame a função de exclusão
    delete($id);
} else {
    // Defina a mensagem de erro
    $_SESSION['message'] = "Erro ao tentar excluir o registro.";
    $_SESSION['type'] = "danger";
}

header('Location: index.php');
exit();
