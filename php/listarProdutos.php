<?php

require_once '../db/db.php';

 // Listar a consulta
 $result = array();
 $sql = "SELECT * FROM produto";

 $result = $banco->query($sql)->fetchAll();
 

 // chamar a classe $produto->listar()



// include html/lista.html
// no html
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Just-t Store</title>
</head>
<body>
      <!--MENU-->
<header class="container-fluid bg-white" id="topo">

    <!--Logo-->
    <nav class="d-flex justify-content-between">
            <a href="../index.php" class="navbar-brand">
                <img src="../img/Logo2.png" alt="img" style="width: 5rem;">
                <h1 class="d-none">Just-T Store</h1>
            </a>
            
            <div>
                    <!-- Login -->
                    <?php if (isset($_SESSION['login'])) {?>
                            
                        Ola, <?=$_SESSION['login']?>

                    <!-- Sair -->
                        <a href="./php/sair.php" class="nav-icon mx-3">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>

                    <?php } else {?>

                        <a href="./html/login.php" class="nav-icon mx-2">
                            <i class="far fa-user"></i>
                        </a>
                        
                    <?php }?>
                </div>
        
    </nav>
</header>

<main class="container mb-5" id="cadasto">

        <table class="m-2">
        <tbody class="text-center">
            <td>
                <label class="font-weight-bold m-2 text-uppercase">Nome</label>
       
            </td>
            <td>
                <label class="font-weight-bold m-2 text-uppercase">Imagem</label>
            </td>
            <td>
                <label class="font-weight-bold m-2 text-uppercase">Valor</label>
            </td>
            <td>
                <a href="/html/cadastrarProduto.html" class="btn btn-primary font-weight-bold fas fa-plus-square"> Novo Produto</a>
            </td>

        <?php foreach($result as $row) {?>
            
            <tr>
                <td class="p-2"><?=$row['nome']?></td>
                <td class="p-2"><img src="../img/<?=$row['imagem']?>" id="image" class="mb-3"></td>
                <td class="p-2"><label class="p-1">R$</label><?=$row['valor']?></td>
                <td class="p-2">
                    <a href="/php/editarProduto.php?id=<?=$row['id']?>" class="btn btn-primary fas fa-edit mb-2">Editar</a>

                    <a href="/php/excluirProduto.php?id=<?=$row['id']?>" class="btn btn-primary fas fa-trash-alt mb-2">Excluir</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</main>

<div class="text-center m-5">
    <a href="../../index.php" class="btn btn-primary font-weight-bold text-uppercase">Voltar a home</a>
</div>

</body>
</html>
 
