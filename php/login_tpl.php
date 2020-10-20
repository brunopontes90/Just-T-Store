<?php
ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    
require 'sessao.php';

//armazenando login e senha no db
$credenciais = [0 => ['user' => 'bruno@senac.br', 'pass' => '123456'],
                1 => ['user' => 'marcos@senac.br', 'pass' => '678910']];

if(isset($_SESSION['login'])){ //caso o login estiver logado no sistema

    include 'pag.php';

}else if(isset($_POST['entrar'])){ //caso o user tenha acabado de preencher o form de login
    // VERFICA SE AS CREDENCIAIS SÃO VALIDAS
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    // echo "<script type='javascript'>alert('Email enviado com Sucesso! 2222');";

    if (in_array(['user' => $login, 'pass' => $senha], $credenciais)) {

        //Cria vetor no SESSION para o login do user e verifica se existe esse login nas outras paginas
        $_SESSION['login'] = $login;
    }else{
        $msg = 'Credenciais invalidas, tente novamente';
        echo 'teste1';
        include 'login.php';
    }
}else { //Caso o user tenha entrado pela 1° vez no site

    include 'login.php'; //se nao estiver entra no form
}