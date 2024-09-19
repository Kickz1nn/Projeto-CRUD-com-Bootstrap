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

    function find( $table = null, $id = null ) {
    
        $database = open_database();
        $found = null;

        try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            
            if ($result->num_rows > 0) {
            $found = $result->fetch_assoc();
            }
            
        } else {
            
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
        } catch (Exception $e) {
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        
        close_database($database);
        return $found;
    }

    function find_all( $table ) {
        return find($table);
    }

    function save($table = null, $data = null) {

        $database = open_database();
    
        $columns = null;
        $values = null;
    
        foreach ($data as $key => $value) {
            $columns .= trim($key, "'") . ",";
            $values .= "'$value',";
        }
    
        $columns = rtrim($columns, ',');
        $values = rtrim($values, ',');
        
        $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
    
        try {
            $database->query($sql);
        
            $_SESSION['message'] = 'Registro cadastrado com sucesso.';
            $_SESSION['type'] = 'success';
        
        } catch (Exception $e) { 
        
            $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
            $_SESSION['type'] = 'danger';
        } 
    
        close_database($database);
    }

    function update($table = null, $id = 0, $data = null) {
        $database = open_database();
        $items = null;
    
        // Excluir o campo 'img_atual' da consulta
        foreach ($data as $key => $value) {
            if ($key !== 'img_atual') { // Ignora 'img_atual'
                $escaped_value = $database->real_escape_string($value);
                $items .= trim($key, "'") . "='$escaped_value',";
            }
        }
    
        // Remove a última vírgula
        $items = rtrim($items, ',');
    
        $sql  = "UPDATE " . $table;
        $sql .= " SET $items";
        $sql .= " WHERE id=" . (int)$id . ";";
    
        // Debugging
        error_log("SQL Gerado: $sql");
        error_log("Chamando a função update com dados: " . print_r($data, true));
    
        try {
            if ($database->query($sql) === FALSE) {
                throw new Exception("Erro na execução da consulta: " . $database->error);
            }
    
            $_SESSION['message'] = 'Registro atualizado com sucesso.';
            $_SESSION['type'] = 'success';
        } catch (Exception $e) {
            $_SESSION['message'] = 'Não foi possível realizar a operação.';
            $_SESSION['type'] = 'danger';
            error_log("Exception: " . $e->getMessage());
        } finally {
            close_database($database);
            error_log("Conexão com o banco de dados fechada");
        }
        // Após a chamada da função update
        if ($_SESSION['type'] === 'success') {
            error_log("Redirecionando para index.php após atualização bem-sucedida");
            header('Location: index.php');
            exit();
        } else {
            error_log("Mensagem de erro após tentativa de atualização: " . $_SESSION['message']);
            echo $_SESSION['message'];
        }

    }
    
    
    
    function remove( $table = null, $id = null ) {

        $database = open_database();
            
        try {
            if ($id) {
        
                $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
                $result = $database->query($sql);
        
                if ($result = $database->query($sql)) {   	
                    $_SESSION['message'] = "Registro Removido com Sucesso.";
                    $_SESSION['type'] = 'success';
                }
            }
        } catch (Exception $e) { 
        
            $_SESSION['message'] = $e->GetMessage();
            $_SESSION['type'] = 'danger';
        }
        
        close_database($database);
    }

    function FormataData ( $data, $formato) {
        $dt = new DateTime($data, new DateTimeZone("America/Sao_Paulo"));
        return $dt->format($formato);
    }

    function telefone ($telefone) {
        $tel = "(" . substr($telefone, 0, 2) . ")" . substr($telefone, 2, 5) . "-" . substr($telefone, 7, 4);
        return $tel;
    }

    function cep ($cep) {
        $newcep = "" . substr($cep, 0, 5) . "-" . substr($cep, 5);
        return $newcep;
    }

    function cpf ($cpf) {
        //490.396.938-03
        //012 345 678 9 10
        $newcpf = "". substr($cpf, 0, 3) . "." . substr($cpf, 3, 3) . "." . substr($cpf, 6, 3) . "-" . substr($cpf, 9);
        return $newcpf;
    }
?>