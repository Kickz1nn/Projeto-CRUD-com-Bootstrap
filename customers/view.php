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

<dl class="dl-horizontal">
    <dt>Nome / Razão Social:</dt>
    <dd><?php echo $customer['name']; ?></dd>

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
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>