<?php
include("functions.php");
add();
include(HEADER_TEMPLATE);

// Inicia a sessão
session_start();

// Verifica se a variável de sessão 'user' está definida
if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] === "admin") {
        $_SESSION['message'] = "Você pode acessar esse recurso!";
        $_SESSION['type'] = "success";
    } else {
        $_SESSION['message'] = "Você não pode acessar esse recurso!";
        $_SESSION['type'] = "danger";
        header("Location: " . BASEURL . "index.php");
        exit();
    }
} else {
    $_SESSION['message'] = "Você não pode acessar esse recurso!";
    $_SESSION['type'] = "danger";
    header("Location: " . BASEURL . "index.php");
    exit(); // Certifique-se de que o código não continue após o redirecionamento
}

?>

<h2 class="mt-2">Novo Usuário</h2>

<form action="add.php" method="post" enctype="multipart/form-data">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-8">
            <label for="nome">Nome completo</label>
            <input type="text" class="form-control" id="nome" name="usuario[nome]" required>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="username">Usename</label>
            <input type="text" class="form-control" id="username" name="usuario[user]" required>
        </div>
    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" name="usuario[pass]" required>
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>

        <div class="form-group col-md-2">
            <label for="imgPreview">Pré visualização</label>
            <img class="form-control rounded" id="imgPreview" src="./fotos/semimagem.jpg" alt="" srcset="">
        </div>

    </div>

    <div id="actions" class="row mt-2">
        <div class="col-md-12">
            <button type="submit" class="btn btn-outline-dark btn-lg mt-3 btn-color me-4"><i class="fa-solid fa-sd-card"></i> Salvar</button>
            <a href="index.php" class="btn btn-outline-dark btn-lg mt-3 btn-color"> <i class="fa-solid fa-arrow-left"></i> Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
<script>
    $(document).ready(() => {
        $("#foto").change(function() {
            const file = this.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $("#imgPreview").attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>