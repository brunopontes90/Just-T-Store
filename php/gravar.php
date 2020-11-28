<?php

session_start();

require_once '../db/db.php';

if (isset($_SESSION['id'])) { // se o usuário estiver logado atualiza os próprios dados
    
    // Só altera a senha do usuário se ele preencher o campo
    if (!empty($_POST['senha'])) {
        $objStmt = $banco->prepare("UPDATE cadastro SET
            senha = :senha
        WHERE 
            id = :id");
            
        $objStmt->bindParam(':senha', $_POST['senha']);
        $objStmt->bindParam(':id', $_SESSION['id']);

        $objStmt->execute();
    }

    $objStmt = $banco->prepare("UPDATE cadastro SET
        email = :email,
        nome = :nome,
        endereco = :endereco,
        complemento = :complemento,
        cidade = :cidade,
        estado = :estado,
        cep = :cep
   WHERE 
        id = :id");
   
    // Substitui :em e em pelo valor enviado pelo usuario
    $objStmt->bindParam(':email', $_POST['email']);
    $objStmt->bindParam(':nome', $_POST['nome']);
    $objStmt->bindParam(':endereco', $_POST['endereco']);
    $objStmt->bindParam(':complemento', $_POST['complemento']);
    $objStmt->bindParam(':cidade', $_POST['cidade']);
    $objStmt->bindParam(':estado', $_POST['estado']);
    $objStmt->bindParam(':cep', $_POST['cep']);
    $objStmt->bindParam(':id', $_SESSION['id']);
}
else {
    // se não insere um novo registro

    $objStmt = $banco->prepare("INSERT INTO cadastro
        (email, senha, nome, endereco, complemento, cidade, estado, cep)
        VALUES
        (:email, :senha, :nome, :endereco, :complemento, :cidade, :estado, :cep)");
   
   // Substitui :em e em pelo valor enviado pelo usuario
   $objStmt->bindParam(':email', $_POST['email']);
   $objStmt->bindParam(':senha', $_POST['senha']);
   $objStmt->bindParam(':nome', $_POST['nome']);
   $objStmt->bindParam(':endereco', $_POST['endereco']);
   $objStmt->bindParam(':complemento', $_POST['complemento']);
   $objStmt->bindParam(':cidade', $_POST['cidade']);
   $objStmt->bindParam(':estado', $_POST['estado']);
   $objStmt->bindParam(':cep', $_POST['cep']);
}

// Executar
if ($objStmt->execute()) {

    include 'login.php';
    
}else{

    $msg = ':-( deu erro, tente novamente';
}

include '../html/mensagem.php';