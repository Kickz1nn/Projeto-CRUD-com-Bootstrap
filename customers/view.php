<?php
    include('functions.php');
    view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<form class="ms-2 me-2">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Nome / Razão Social:</label>
            <input type="text" class="form-control" id="name" value="<?php echo $customer['name']; ?>" readonly>
        </div>

<<<<<<< HEAD
        <div class="form-group col-md-6">
            <label for="cpf_cnpj">CPF / CNPJ:</label>
            <input type="text" class="form-control" id="cpf_cnpj" value="<?php echo cpf($customer['cpf_cnpj']); ?>" readonly>
        </div>
=======
    <dt>CPF / CNPJ:</dt>
    <dd><?php echo cpf($customer['cpf_cnpj']); ?></dd>

    <dt>Data de Nascimento:</dt>
    <dd><?php echo FormataData($customer['birthdate'], "d/m/Y"); ?></dd>
</dl>

<dl class="dl-horizontal">
    <dt>Endereço:</dt>
    <dd><?php echo $customer['address']; ?></dd>

    <dt>Bairro:</dt>
    <dd><?php echo $customer['hood']; ?></dd>

    <dt>CEP:</dt>
    <dd><?php echo cep($customer['zip_code']); ?></dd>

    <dt>Data de Cadastro:</dt>
    <dd><?php echo FormataData($customer['created'], "d/m/Y"); ?></dd>
</dl>

<dl class="dl-horizontal">
    <dt>Cidade:</dt>
    <dd><?php echo $customer['city']; ?></dd>

    <dt>Telefone:</dt>
    <dd><?php echo telefone($customer['phone']); ?></dd>

    <dt>Celular:</dt>
    <dd><?php echo telefone($customer['mobile']); ?></dd>

    <dt>UF:</dt>
    <dd><?php echo $customer['state']; ?></dd>

    <dt>Inscrição Estadual:</dt>
    <dd><?php echo number_format($customer['ie'], 0, ",", "."); ?></dd>
</dl>

<div id="actions" class="row">
    <div class="col-md-12">
        <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-dark">Editar</a>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
>>>>>>> cfb03fa8797833846161b202c277be926177ea15
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="birthdate">Data de Nascimento:</label>
            <input type="text" class="form-control" id="birthdate" value="<?php echo FormataData($customer['birthdate'], "d/m/Y"); ?>" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="address">Endereço:</label>
            <input type="text" class="form-control" id="address" value="<?php echo $customer['address']; ?>" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="hood">Bairro:</label>
            <input type="text" class="form-control" id="hood" value="<?php echo $customer['hood']; ?>" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="zip_code">CEP:</label>
            <input type="text" class="form-control" id="zip_code" value="<?php echo cep($customer['zip_code']); ?>" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="created">Data de Cadastro:</label>
            <input type="text" class="form-control" id="created" value="<?php echo FormataData($customer['created'], "d/m/Y"); ?>" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" value="<?php echo $customer['city']; ?>" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-4">
            <label for="phone">Telefone:</label>
            <input type="text" class="form-control" id="phone" value="<?php echo telefone($customer['phone']); ?>" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="mobile">Celular:</label>
            <input type="text" class="form-control" id="mobile" value="<?php echo telefone($customer['mobile']); ?>" readonly>
        </div>

        <div class="form-group col-md-4">
            <label for="state">UF:</label>
            <input type="text" class="form-control" id="state" value="<?php echo $customer['state']; ?>" readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="ie">Inscrição Estadual:</label>
            <input type="text" class="form-control" id="ie" value="<?php echo number_format($customer['ie'], 0, ",", "."); ?>" readonly>
        </div>
    </div>

    <div id="actions" class="row mt-2">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
