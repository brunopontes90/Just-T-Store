<?php

session_start(); //precisa para validar o codigo abaixo

if (!isset($_SESSION['login'])) { //se nao estiver logado, retorna para 'index.php'

    header('Location: ./index.php'); // usado '/' para voltar ao 'index.php', ou pode usar 'index.php' direto

}