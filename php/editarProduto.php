<?php

require_once '../db/db.php';

session_start();

// Listar a consulta
$result = array();
$sql = "SELECT * FROM produto WHERE id = " . $_GET['id'];


// executa a query e pega o resultado como array
$result = $banco->query($sql)->fetchAll();
 
// pega o primeiro registro do array
$row = $result[0];

// inclue o form html
include '../html/editarProduto.php';