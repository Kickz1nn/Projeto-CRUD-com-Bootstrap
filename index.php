<?php include "config.php"; ?>
<?php include DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
    <main class="container">
        <?php $db = open_database(); ?>
        <h1>Dashboard</h1>
        <hr>
        <?php if ($db): ?>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="customers/add.php" class="btn btn-secondary">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa-solid fa-user-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                           <p>Novo Cliente</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="customers" class="btn btn-light">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Clientes</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="clothes/add.php" class="btn btn-secondary">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                        <i class="fa-solid fa-shirt fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                           <p>Nova Roupa</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-2">
                <a href="clothes" class="btn btn-light">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                        <i class="fa-solid fa-vest fa-5x"></i>
                        </div>
                        <div class="col-xs-12 text-center">
                            <p>Roupas</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
            </div>

        <?php endif; ?>

        <hr>
    </main> <!-- /container -->
    <?php include(FOOTER_TEMPLATE); ?>

</html>