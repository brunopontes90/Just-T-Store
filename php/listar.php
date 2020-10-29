<?php

require_once 'db.php';

 // Listar a consulta
 $tabela = array();
 $lista = "SELECT id, email, senha, endereco, complemento, cidade, estado, cep FROM cadastro";

 foreach ($db->query($lista) as $registro) {
     $tabela [$registro['id']] = ['email' => $registro['email'], 
                                 ['senha' => $registro['senha']],
                                 ['endereco' => $registro['endereco']],
                                 ['complemento' => $registro['complemento']],
                                 ['cidade' => $registro['registro']],
                                 ['estado' => $registro['estado']],
                                 ['cep' => $registro['cep']]];
 }