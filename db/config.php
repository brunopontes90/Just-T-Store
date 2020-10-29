<?php
ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class banco{
    // $dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=CADASTRO'; //localhost na maioria dos PCs dos alunos
    public $cadastro = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=CADASTRO';
    public $login = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=LOGIN';
    public $user = 'sa';
    public $password = '9012@TIBruno';
}

$obj = new banco();