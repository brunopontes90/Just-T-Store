<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../db/db.php';

$nome = isset($_POST['nome']) ? $_POST['nome'] : "Sem Nome"; //PEGA O NOME DO USUARIO, CASO NÃO PASSE O NOME RETORNA 'SEM NOME'
$sobreNome = isset($_POST['sobreNome']) ? $_POST['sobreNome'] : "Sem Sobrenome"; //PEGA O SOBRENOME DO USUARIO, CASO NÃO PASSE O SOBRENOME RETORNA 'SEM SOBRENOME'
$email = isset($_POST['exampleFormControlInput1']) ? $_POST['exampleFormControlInput1'] : "Sem E-mail"; //PEGA O EMAIL DO USUARIO, CASO NÃO PASSE O EMAIL RETORNA 'SEM EMAIL'
$opcao = isset($_POST['exampleFormControlSelect1']) ? $_POST['exampleFormControlSelect1'] : "Sem Tipo"; //PEGA O TIPO DE OPÇÃO DO USUARIO, CASO NÃO PASSE O TIPO RETORNA 'SEM TIPO'

switch($opcao){ //ESCOLHE A OPÇÃO E RETONA A OPÇÃO DESEJADA
    case 'info': 
        echo 'Tpo: Informações';
    break;
    case 'rec':
        echo 'Tipo: Reclamações';
    break;
    case 'elog':
        echo 'Tipo: Elogios';
    break;
    case 'sug':
        echo 'Tipo: Sugestões';
    break;
    default: //SE NAO ESCOLHER O TIPO RETORNA 'SEM TIPO ESCOLHIDO'
        echo 'Sem tipo escolhido';
    break;
}

//PEGA A MENSAGEM DIGITADA, CASO NAO DIGITE NADA RETORNA 'SEM MENSAGEM'
$msg = isset($_POST['exampleFormControlTextarea1']) ? $_POST['exampleFormControlTextarea1'] : "Sem Mensagem";

?>