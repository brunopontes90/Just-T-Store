<?php

require_once '../db/db.php';

 // Listar a consulta
 $result = array();
 $sql = "SELECT id, email, nome, endereco, complemento, cidade, estado, cep FROM cadastro";

 $result = $banco->query($sql)->fetchAll();
 




// include html/lista.html
// no html
?>

<table border=1>
    <thead>
        <tr>
            <td>id</td>
            <td>email</td>
            <td>nome</td>
            <td>endereco</td>
            <td>complemento</td>
            <td>cidade</td>
            <td>estado</td>
            <td>cep</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $row) {?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['nome']?></td>
                <td><?=$row['endereco']?></td>
                <td><?=$row['complemento']?></td>
                <td><?=$row['cidade']?></td>
                <td><?=$row['estado']?></td>
                <td><?=$row['cep']?></td>
                <td>
                    <a href="/php/editar.php?id=<?=$row['id']?>">Editar</a>
                    <a href="/php/excluir.php?id=<?=$row['id']?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>