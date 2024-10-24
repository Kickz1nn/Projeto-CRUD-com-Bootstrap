<?php
  include("functions.php");
  
  if(isset($_GET["id"])) {
    try {
        $usuario = find("usuarios", $_GET["id"]);
        delete($_GET["id"]);
        unlink("fotos/" . $usuario["foto"]);
    } catch(Exception $e) {
        $_SESSION["message"] = "Ocorreu um erro: " . $e->getMessage();
        $_SESSION["type"] = "danger";
    }
  }
?>