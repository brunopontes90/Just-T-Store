<?php

session_start();

require_once '../db/db.php';


function upload($campo) {
    $uploaddir = __DIR__ . '/../img/' ;
    $filename = basename($_FILES[$campo]['name']);
    $uploadfile = $uploaddir . $filename;

    if (move_uploaded_file($_FILES[$campo]['tmp_name'], $uploadfile)) {
        return $filename;
    }

    return null;
}

if (isset($_POST['id'])) { // se o campo ID for enviado é para atualizar o registro
    
    // Só altera a imagem se ele preencher o campo
    if (!empty($_POST['imagem'])) {
        $arquivo = upload('imagem');
        if ($arquivo == null) {
            $msg = 'Deu erro no upload do arquivo';
            include '../html/mensagem.php';
            exit;
        }

        $objStmt = $banco->prepare("UPDATE produto SET
            imagem = :imagem
        WHERE 
            id = :id");
            
        $objStmt->bindParam(':imagem', $arquivo);
        $objStmt->bindParam(':id', $_SESSION['id']);

        $objStmt->execute();
    }

    $objStmt = $banco->prepare("UPDATE produto SET
        nome = :nome,
        valor = :valor
   WHERE 
        id = :id");
   
    // Substitui :em e em pelo valor enviado pelo usuario
    $objStmt->bindParam(':nome', $_POST['nome']);
    $objStmt->bindParam(':valor', $_POST['valor']);
    $objStmt->bindParam(':id', $_POST['id']);
}
else {
    // se não insere um novo registro

    $arquivo = upload('imagem');
    if ($arquivo == null) {
        $msg = 'Deu erro no upload do arquivo';
        include '../html/mensagem.php';
        exit;
    }

    $objStmt = $banco->prepare("INSERT INTO produto
        (nome, valor, imagem)
        VALUES
        (:nome, :valor, :imagem)");

    // Substitui :em e em pelo valor enviado pelo usuario
    $objStmt->bindParam(':nome', $_POST['nome']);
    $objStmt->bindParam(':valor', $_POST['valor']);
    $objStmt->bindParam(':imagem', $arquivo);
}

// Executar
if ($objStmt->execute()) {
    $msg = 'Gravado com sucesso!';
}else{
    $msg = ':-( deu erro, tente novamente';
    print_r($objStmt->errorInfo());
}

include '../html/mensagem.php';