<?php
ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Config {
    public $db = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=JUST-T-STORE';//localhost na maioria dos PCs dos alunos
    public $user = 'sa';
    public $password = '9012@TIBruno';
}