<?php

    /** O nome do banco de dados*/
    define("DB_NAME", "if0_37679468_wda_crud");

    /** Usuário do banco de dados MySQL */
    define("DB_USER", "if0_37679468");

    /** Senha do banco de dados MySQL */
    define("DB_PASSWORD", "CRxIgpNNvK");

    /** nome do host do MySQL */
    define("DB_HOST", "sql208.infinityfree.com");

    /** caminho absoluto para a pasta do sistema **/
    if (!defined("ABSPATH")) {
        define("ABSPATH", dirname(__FILE__) . "/");
    }

    /** caminho no server para o sistema **/
    if (!defined("BASEURL")) {
        define("BASEURL", "../");
    }

    /** caminho do arquivo de banco de dados **/
    if (!defined("DBAPI")) {
        define("DBAPI", ABSPATH . "inc/database.php");
    }

    /** caminhos dos templates de header e footer **/
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>