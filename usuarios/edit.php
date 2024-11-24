<?php
include("functions.php");
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

edit();
include(HEADER_TEMPLATE);
?>
<header>
	<h2>Atualizar Informações</h2>
</header>

<form action="edit.php?id=<?php echo $usuario['id']; ?>" method="post" enctype="multipart/form-data">
	<hr>
	<div class="row mb-5 mt-5">
		<div class="form-group col-md-4">
			<label for="nome">
				<h6>Nome</h6>
			</label>
			<input type="text" class="form-control" name="usuario[nome]" value="<?php echo ($usuario['nome']); ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="login">
				<h6>Usuário (Login)</h6>
			</label>
			<input type="text" class="form-control" name="usuario[user]" value="<?php echo $usuario['user']; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="senha">
				<h6>Senha</h6>
			</label>
			<input type="password" class="form-control" name="usuario[pass]" value="">
		</div>
	</div>

	<div class="row mb-5">
		<?php
		$foto = "";
		if (empty($usuario['foto'])) {
			$foto = "sem_imagem.jpg";
		} else {
			$foto = $usuario['foto'];
		}
		?>
		<div class="form-group col-md-4">
			<label for="campo1">Foto</label>
			<input type="file" class="form-control" id="foto" name="foto" value="fotos/<?php echo $foto; ?>">
		</div>

		<div class="form-group col-md-2">
			<label for="pre">Pré-Visualização</label>
			<img class="form-control shadow p-2 mb-2 bg-body rounded" id="imgPreview" src="fotos/<?php echo $foto; ?>" alt="Foto do usuário" srcset="">
		</div>
	</div>

	<div id="actions" class="row">
		<div class="col-md-12">
			<button type="submit" class="btn btn-outline-dark btn-lg mt-3 btn-color me-4"><i class="fa-solid fa-sd-card"></i> Salvar</button>
			<a href="index.php" class="btn btn-outline-dark btn-lg mt-3 btn-color"><i class="fa-solid fa-arrow-left"></i> Cancelar</a>
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