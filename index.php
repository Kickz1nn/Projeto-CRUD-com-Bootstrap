<?php include "config.php"; ?>
<?php include DBAPI; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="Site dedicado ao bora bill recebilson">
    <meta name="keywords" content="receba, bora, bill">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>awesome/all.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <style>
        .btn-light{
            background-color: #aaa;
            color: #ffffff;
            border-color: #ccc;
        }
        .btn-light:hover{
            background-color: #888;
            color: #ffffff;
            border-color: #ccc;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid"> 
            <a class="navbar-brand" href="<?php echo BASEURL; ?>"><i class="fa-solid fa-house"></i> Crud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-users"></i> Clientes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers"><i class="fa-solid fa-users"></i> Gerenciar Clientes</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php"><i class="fa-solid fa-user-plus"></i> Novo Cliente</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tema
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            
        </div>
    </nav>
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
        </div>

        <?php else: ?>
            <div class="alert alert-danger" role="alert">
                <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
            </div>

        <?php endif; ?>

        <hr>
    </main> <!-- /container -->
    <footer class="container">
        <?php $data = new DateTime("now", new DateTimeZone("America/Sao_Paulo")) ?>
        <p>&copy;2024 à <?php echo $data->format("Y"); ?>- Caio Augusto e Kaiky</p>
    </footer>
</body>
<script src="<?php echo BASEURL; ?>js/jquery-3.7.1.min.js"></script>
<script src="<?php echo BASEURL; ?>js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASEURL; ?>js/awesome/all.min.js"></script>
<script src="<?php echo BASEURL; ?>js/main.js"></script>

</html>