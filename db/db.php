<?php
require_once './db/config.php';

$db = new PDO($dsn, $user, $password);

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $objErro) {
    echo 'SGBD Indisponivel: ' . $objErro -> getMessage();
    exit();
}