<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

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
            <a href="../index.html" class="navbar-brand">
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
                        <form class="form-signin" method="post">
                        <h1 class="card-title text-center text-muted h2 text-uppercase">Login</h1>
                        <?php
                            if(isset($msg)) echo $smg;
                        ?>
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
                                <a href="cadastro.php" class="m-3" id="nao-possuo">Não possuo cadastro</a>
                                <a href="../index.html" class="m-3" id="pagina-inicial">Voltar a pagina inicial</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </aside>
    </main>

    <!--Rodape-->
    <footer class="container-fluid bg-dark mt-5">
        <nav id="redes " class="row">
            <div class="col-sm-12 ">
                <div>
                    <ul class="nav justify-content-center ">

                        <!--FACEBOOK-->
                        <li class="nav-item">
                            <a href="https://www.facebook.com/justt.storebr/?eid=ARDFdcZObZjv3PDsFGuHrvH34-6qpOm87IZRsPtgJ9V9ovVikJPLfPEwy2Ki8juwZpiYVCr6LBHfGRe0" target="_blank">
                                <i class="fab fa-facebook-f text-decoration-none text-white"></i>
                            </a>
                        </li>

                        <!--INSTAGRAM-->
                        <li class="nav-item">
                            <a href="https://www.instagram.com/justt.store/" target="_blank">
                                <i class="fab fa-instagram text-decoration-none text-white"></i>
                            </a>
                        </li>

                        <!--WHATSAPP-->
                        <li class="nav-item">
                            <a href="https://api.whatsapp.com/send?phone=5511934243640&text=Ol%C3%A1%2C%20gostaria%20de%20obter%20mais%20detalhes%20e%20informa%C3%A7%C3%B5es%20sobre%20as%20promo%C3%A7%C3%B5es%20%F0%9F%98%8A" target="_blank">
                                <i class="fab fa-whatsapp text-decoration-none text-white"></i>
                            </a>
                        </li>

                        <!--MARCAR REGISTRADA-->
                        <div class="col-sm-12">
                            <div class="nav justify-content-center">
                                <li class="nav-item">
                                    <i id="marca" class="far fa-registered text-white"> 2020 - Just-T Store</i>
                                </li>
                            </div>
                        </div>

                    </ul>
                </div>
            </div>
        </nav>
    </footer>

</body>

</html>