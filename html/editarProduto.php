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
    <link rel="icon" href="../img/Logo2.png">

    <title>Just-t Store</title>
</head>

<body>
    <header class="container-fluid bg-secondary">

        <!--Logo-->
        <nav class="navbar navbar-expand-sm navbar-light">
            <a href="../index.php" class="navbar-brand">
                <img src="../img/Logo2.png" alt="img" style="width: 5rem;">
                <h1 class="d-none">Just-T Store</h1>
            </a>
        </nav>

    </header>

    <main class="container" id="cadasto">
        <form class="m-5" method='post' action="/php/gravarProduto.php">
            <h1 class="h2 text-center text-uppercase text-muted">Cadastro</h1>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputName">Nome</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Nome" name="nome" value="<?=$row['nome']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputValor">Valor</label>
                    <input type="text" class="form-control" id="inputValor" placeholder="0,00" name="valor" value="<?=$row['valor']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputImagem">Imagem</label>
                    <input type="file" class="form-control" id="inputImagem" name="imagem">
                </div>
            </div>

            <input type="hidden" name="id" value="<?=$row['id']?>">

            <div class="text-center">
                <input type="submit" class="btn btn-primary m-2" value="Enviar"></input>
                <a href="../php/listarProdutos.php" class="btn btn-primary m-2">Voltar a edição</a>
            </div>

        </form>

        
    </main>

</body>

</html>