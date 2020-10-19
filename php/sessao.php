<?php

session_start(); //precisa para validar o codigo abaixo

if (!isset($_SESSION['login'])) { //se nao estiver logado, retorna para 'index.php'

    header('Location: ./index.html'); // usado '/' para voltar ao 'index.html', ou pode usar 'index.html' direto

}