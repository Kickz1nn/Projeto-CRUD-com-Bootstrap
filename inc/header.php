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
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                            <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            Clientes <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                            <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        