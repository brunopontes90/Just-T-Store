<?php

require_once '../db/db.php';

$objStmt = $banco->prepare("INSERT INTO cadastro 
(email, senha, nome, endereco, complemento, cidade, estado, cep) 
VALUES 
(:email, :senha, :nomecompleto, :endereco, :complemento, :cidade, :estado, :cep)");

// Substitui :em e em pelo valor enviado pelo usuario
$objStmt->bindParam(':email', $_POST['email']);
$objStmt->bindParam(':senha', $_POST['senha']);
$objStmt->bindParam(':nomecompleto', $_POST['nome'] . ' ' . $_POST['sobrenome']);
$objStmt->bindParam(':endereco', $_POST['endereco']);
$objStmt->bindParam(':complemento', $_POST['complemento']);
$objStmt->bindParam(':cidade', $_POST['cidade']);
$objStmt->bindParam(':estado', $_POST['estado']);
$objStmt->bindParam(':cep', $_POST['cep']);

// Executar
if ($objStmt->execute()){
    $msg = 'Contado gravado com sucesso!';
}else{
    $msg = ':-( deu erro, tente novamente';
}

echo $msg;