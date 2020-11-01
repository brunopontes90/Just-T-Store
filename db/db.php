<?php
require_once 'config.php';

$config = new Config();

// CONECTA COM O BANCO DE DADOS 'CADASTRO'
try {
    $banco = new PDO($config->db, $config->user, $config->password);
} catch (PDOException $objErro) {
    echo 'SGBD Indisponivel: ' . $objErro -> getMessage();
    exit();
}