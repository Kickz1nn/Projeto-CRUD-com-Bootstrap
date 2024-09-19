<?php
session_start();
include('functions.php');

<<<<<<< HEAD
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Chame a função de exclusão
    delete($id);

    // Defina a mensagem de sucesso
    $_SESSION['message'] = "Registro excluído com sucesso.";
    $_SESSION['type'] = "success";
} else {
    // Defina a mensagem de erro
    $_SESSION['message'] = "Erro ao tentar excluir o registro.";
    $_SESSION['type'] = "danger";
}

header('Location: index.php');
exit();
=======
    if (isset($_POST['id'])){
        delete($_POST['id']);
    } else {
        die("ERRO: ID não definido.");
    }
?>
>>>>>>> cfb03fa8797833846161b202c277be926177ea15
