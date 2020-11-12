<?php

require_once '../db/db.php';

session_start();

// faz o delete da tabela
$result = array();
$objStmt = $banco->prepare("DELETE FROM
                                    produto
                            WHERE 
                                    id = :id");

// Substitui :em e em pelo valor enviado pelo usuario
$objStmt->bindParam(':id', $_GET['id']);

// Executar
if ($objStmt->execute()) {
    $msg = 'Produto deletado com sucesso!';
}else{
    $msg = 'Erro, tente novamente';
}

include '../html/mensagem.php';