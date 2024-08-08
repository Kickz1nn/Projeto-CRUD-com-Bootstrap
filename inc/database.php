<?php

    mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

    function open_database() {
        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $conn->set_charset("utf8");
            return $conn;
        } catch (Exception $e) {
            throw $e;
        }
    }
    
    function close_database($conn) {
        try {
            $conn = null;
        } catch (Exception $e) {
            echo "<h3> Aconteceu algum erro: <br>" . $e->getMessage() . "</h3>";
        }
    }
?>