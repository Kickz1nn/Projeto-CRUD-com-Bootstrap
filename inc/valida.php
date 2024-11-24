<?php
ob_start(); // Iniciar buffer de saída para evitar problemas com headers

include("../config.php");
include(DBAPI);
include(HEADER_TEMPLATE);

// Iniciar sessão antes de qualquer outra coisa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verificar se login e senha foram enviados
if (empty($_POST['login']) || empty($_POST['senha'])) {
    $_SESSION['message'] = "Login e senha são obrigatórios.";
    $_SESSION['type'] = "danger";
    header("Location: " . BASEURL . "index.php");
    exit;
}

// Abrir conexão com o banco
$bd = open_database();

try {
    // Preparar dados
    $usuario = $_POST['login'];
    $senha = criptografia($_POST['senha']); // Verifique esta função conforme sugerido

    // Usar prepared statement para evitar SQL Injection
    $stmt = $bd->prepare("SELECT id, nome, user, pass FROM usuarios WHERE user = ? AND pass = ? LIMIT 1");
    $stmt->bind_param('ss', $usuario, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Dados do usuário
        $dados = $resultado->fetch_assoc();
        $_SESSION['id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];
        $_SESSION['user'] = $dados['user'];

        // Verificar o cargo baseado no nome de usuário
        if ($_SESSION['user'] === "admin") {
            $_SESSION['role'] = "admin"; // Define o cargo como admin
        } else {
            $_SESSION['role'] = "user";  // Define o cargo como user para outros usuários
        }

        // Mensagem de boas-vindas com o cargo do usuário
        $_SESSION['message'] = "Bem-vindo, " . $dados['nome'] . " (" . $_SESSION['role'] . ")!";
        $_SESSION['type'] = "success";

        header("Location: " . BASEURL . "index.php");
        exit;
    } else {
        // Credenciais incorretas
        $_SESSION['message'] = "Usuário ou senha incorretos.";
        $_SESSION['type'] = "danger";
        header("Location: " . BASEURL . "inc/login.php");
        exit;
    }
} catch (Exception $e) {
    // Tratamento de erro
    $_SESSION['message'] = "Ocorreu um erro: " . $e->getMessage();
    $_SESSION['type'] = "danger";
    header("Location: " . BASEURL . "inc/login.php");
    exit;
} finally {
    $stmt->close(); // Fecha a instrução preparada
    $bd->close();   // Fecha a conexão com o banco de dados
}

ob_end_flush(); // Limpar buffer de saída e enviar conteúdo
?>
