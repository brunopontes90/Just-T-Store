<?php

require_once 'db.php';

global $msg;

$objStmt =  $db -> prepare("INSERT INTO cadastrando 
(email, senha, endereco, complemento, cidade, estado, cep) 
VALUES 
( :em , :sn, :ed, :cp, :cd, :et, :ce)");

// Substitui :em e em pelo valor enviado pelo usuario
$objStmt ->bindParam(':em', $_POST['em']);
$objStmt ->bindParam(':sn', $_POST['sn']);
$objStmt ->bindParam(':ed', $_POST['ed']);
$objStmt ->bindParam(':cp', $_POST['cp']);
$objStmt ->bindParam(':cd', $_POST['cd']);
$objStmt ->bindParam(':et', $_POST['et']);
$objStmt ->bindParam(':ce', $_POST['ce']);

// Executar
if ($objStmt -> execute()){
    $msg = 'Contado gravado com sucesso!';
}else{
    $msg = ':-( deu erro, tente novamente';
}