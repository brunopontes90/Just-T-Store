<?php

require 'sessao.php';

//armazenando login e senha no db
$credenciais = [0 => ['user' => 'bruno@senac.br', 'pass' => '123456'],
                1 => ['user' => 'marcos@senac.br', 'pass' => '678910']];

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
        include 'login.php';
    }
}else { //Caso o user tenha entrado pela 1° vez no site

    include 'login.php'; //se nao estiver entra no form
}