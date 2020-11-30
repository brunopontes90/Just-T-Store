<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
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

    <!-- Login -->
    <main class="container">
        <aside class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                    <div class="text-danger text-center">
                        <?php if (isset($msg)) echo $msg; ?>
                    </div>
                         <form class="form-signin" method="post" action="/php/login.php">
                            <h1 class="card-title text-center text-muted h2 text-uppercase">Login</h1>
                            <div class="form-label-group">
                                <input type="email" class="form-control" name="login" placeholder="Email" required autofocus>
                                <label for="login">Email</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                                <label for="senha">Senha</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Lembrar Senha</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="entrar">Entrar</button>
                            <hr class="my-4">
                            <div class="row">
                                <a href="/html/cadastro.html" class="m-3" id="nao-possuo">Não possuo cadastro</a>
                                <a href="../index.php" class="m-3" id="pagina-inicial">Voltar a página inicial</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
    </main>

</body>

</html>