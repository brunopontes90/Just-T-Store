<?php
require_once 'config.php';

$banco = new banco();

// CONECTA COM O BANCO DE DADOS 'CADASTRO'
try {
    $connect = new PDO($banco->db, $banco->user, $banco->password);
    
} catch (PDOException $objErro) {
    echo 'SGBD Indisponivel: ' . $objErro -> getMessage();
    exit();
}