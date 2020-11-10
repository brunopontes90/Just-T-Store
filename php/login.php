<?php

require_once '../db/db.php';

if(isset($_SESSION['login'])){ //caso o user estiver logado no sistema

    include 'pag.php';

}else if(isset($_POST['entrar'])){ //caso o user tenha acabado de preencher o form de login
    // Faz o select no banco verificando se o login e senha informados existem
    $query = $banco->prepare("SELECT id, nome, admin FROM cadastro WHERE email = :email AND senha = :senha");
    $query->bindparam(':email', $_POST['login']);
    $query->bindparam(':senha', $_POST['senha']);
    $query->execute();
    
    // pega todas as linhas em forma de array
    $result = $query->fetchAll(PDO::FETCH_CLASS);
    
    // Verifica se existe 1 elemento dentro do array
    if (count($result) == 1) {

        session_start();

        //Cria vetor no SESSION para o login do user e verifica se existe esse login nas outras paginas
        $_SESSION['login'] = $result[0]->nome;
        $_SESSION['id'] = $result[0]->id;
        $_SESSION['admin'] = $result[0]->admin;

        // redireciona para a home
        header('Location: /index.php');
    }else{
        $msg = 'Credenciais invalidas, tente novamente';
        include '../html/login.php'; //se nao estiver entra no form
    }
}else { //Caso o user tenha entrado pela 1° vez no site

    include '../html/login.php'; //se nao estiver entra no form
}