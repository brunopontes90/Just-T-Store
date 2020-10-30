<?php

require_once '../db/db.php';
require 'sessao.php';

//armazenando login e senha no db

$banco = new banco();

if(isset($_SESSION['login'])){ //caso o user estiver logado no sistema

    include 'pag.php';

}else if(isset($_POST['entrar'])){ //caso o user tenha acabado de preencher o form de login
    // VERFICA SE AS CREDENCIAIS SÃO VALIDAS
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (in_array(['user' => $login, 'pass' => $senha], $credenciais)) {

        //Cria vetor no SESSION para o login do user e verifica se existe esse login nas outras paginas
        $_SESSION['login'] = $login;
        include 'pag.php';
    }else{
        $msg = 'Credenciais invalidas, tente novamente';
        header('Location: /html/login.html');    
    }
}else { //Caso o user tenha entrado pela 1° vez no site

    header('Location: /html/login.html'); //se nao estiver entra no form
}