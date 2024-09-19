<?php
    include('functions.php');
    view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Roupa <?php echo $cloth['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<form>
    <div class="row">
        <div class="form-group col-md-7">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" value="<?php echo $cloth['descricao']; ?>" readonly>
        </div>

        <div class="form-group col-md-3">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" value="<?php echo number_format($cloth['precou'], 2, ',', '.'); ?>" readonly>
        </div>

        <div class="form-group col-md-2">
            <label for="tamanho">Tamanho</label>
            <input type="text" class="form-control" id="tamanho" value="<?php echo $cloth['tamanho']; ?>" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-5">
            <label for="quantidade">Quantidade em Estoque</label>
            <input type="text" class="form-control" id="quantidade" value="<?php echo $cloth['quantidade']; ?>" readonly>
        </div>

        <div class="form-group col-md-3">
            <label for="imagem">Imagem</label>
            <input type="text" class="form-control" id="imagem" value="<?php echo !empty($cloth['img']) ? $cloth['img'] : 'Sem imagem disponível'; ?>" readonly>
        </div>

        <div class="form-group col-md-2">
            <label for="created">Data de Cadastro</label>
            <input type="text" class="form-control" id="created" value="<?php echo FormataData($cloth['created'], "d/m/Y"); ?>" readonly>
        </div>
    </div>

    <div id="actions" class="row mt-2">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $cloth['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>