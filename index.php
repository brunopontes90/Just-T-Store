<?php session_start(); ?>

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
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../img/Logo2.png">

    <title>Just-t Store</title>
</head>

<body>
    <!--MENU-->
    <header class="container-fluid bg-white" id="topo">

        <!--Logo-->
        <nav class="navbar navbar-expand-sm navbar-light">
        <a href="../index.php" class="navbar-brand">
                <img src="../img/Logo2.png" alt="img" style="width: 5rem;">
                <h1 class="d-none">Just-T Store</h1>
            </a>

            <!--Menu COLLAPSE-->
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navBarButton">
                <i class="fas fa-bars fa-lg"></i>
            </button>
            <div id="navBarButton" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#quemSomos" class="nav-link">Quem Somos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#fale" class="nav-link">Fale Conosco</a>

                    </li>
                  </ul>
                <div>
                    <!-- Login -->
                    <?php if (isset($_SESSION['login'])) {?>
                            
                        Ola, <?=$_SESSION['login']?>

                        <!-- Editar -->
                        <a href="./html/editar.php" class="nav-icon mx-3">
                            <i class="fas fa-edit"></i>
                        </a>
                        
                        <!-- Excluir -->
                        <a href="./html/excluirUsuario.php" class="nav-icon mx-3">
                            <i class="fas fa-trash-alt"></i>
                        </a>


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
            </div>
        </nav>

    </header>

    <!--PRINCIPAL-->
    <main>
        <!--BANNER-->
        <section class="jumbotron"></section>

        <section class="container mt-5" id="produtos">
            <div class="row py-5">
                <div class="mx-auto col-10 text-center">
                    <h2 class="h1 text-uppercase text-muted font-weight-bold">Nossos produtos</h2>
                    <p class="text-muted">Venha conferir nossas novidades.</p>
                </div>
            </div>


            <!--PRODUTO 1-->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="../img/bateriaPineng.png" class="img-fluid">
                    <div class="mt-3">
                        <a href="../html/powerBank.html" class="btn btn-primary">Visualizar</a>
                    </div>
                    <span class="h5 mt-4 d-block">Carregador Portátil PowerBank Pineng</span>
                    <div class="mb-3">
                        <span class="font-weight-bold">R$70</span>
                    </div>
                </div>


                <!--PRODUTO 2-->
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="../img/relPretoComPulseira3.jpeg" class="img-fluid">
                    <div class="mt-3">
                        <a href="../html/iwoBranco.html" class="btn btn-primary">Visualizar</a>
                    </div>
                    <span class="h5 mt-4 d-block">Relógio Smartwatch Iwo 12 Sport Prata</span>
                    <div class="mb-3">
                        <span class="font-weight-bold">R$450</span>
                    </div>
                </div>


                <!--PRODUTO 3-->
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="../img/relPretoComPulseira4.jpeg" class="img-fluid">
                    <div class="mt-3">
                        <a href="../html/iwoPreto.html" class="btn btn-primary">Visualizar</a>
                    </div>
                    <span class="h5 mt-4 d-block">Relógio Smartwatch Iwo 12 Sport Preto</span>
                    <div class="mb-3">
                        <span class="font-weight-bold">R$450</span>
                    </div>
                </div>


                <!--PRODUTO 4-->
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="../img/relRosa.JPG" class="img-fluid">
                    <div class="mt-3">
                        <a href="../html/iwoRosa.html" class="btn btn-primary">Visualizar</a>
                    </div>
                    <span class="h5 mt-4 d-block">Relógio Smartwatch Iwo 12 Sport Rose</span>
                    <div class="mb-3">
                        <span class="font-weight-bold">R$450</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--QUEM SOMOS-->
    <aside class="container-fluid bg-secondary text-white mt-5" id="quemSomos">
        <h1 class="h1 text-center font-weight-bold text-uppercase mb-5">Quem Somos</h1>
        <div class="row m-0 text-center" id="info">
            <p>Desde 2019 a marca Just-T tras o empreendedorismo e satisfação do cliente como força motriz! Com foco em acessórios e gadgets que otimizam seu dia-a-dia, levamos aos nossos clientes a melhor qualidade e atendimento, nossa filosofia é que nossa
                relação não se encerra após a compra.</p>
            <p class="mb-0 p-2"><span class="font-weight-bold">Missão:</span> Nossa Missão é Democratizar o acesso à tecnologia e oferecer produtos que gerem valor à vida de nossos consumidores.</p>
            <p class="mb-0 p-2"><span class="font-weight-bold">Visão:</span> Ser referência no que tange o atendimento ao cliente e oferta de produtos.</p>
            <p class="mb-0 p-2"><span class="font-weight-bold">Valores:</span> Sonho Grande, Mente aberta e Espirito Empreendedor.</p>
        </div>
    </aside>

    <!--FALE CONOSCO-->
    <section class="container mt-5" id="fale">
        <h1 class="h1 text-center txt-uppercase text-muted">Fale Conosco</h1>
        <form class="m-5" action="./php/cadastro.php" method="post">
            <div class="form-row ">
                <div class="form-row ">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" class="form-control " placeholder="Nome">
                    </div>
                    <div class="col">
                        <label for="sobre ">Sobrenome</label>
                        <input type="text " id="sobreNome" class="form-control " placeholder="Sobrenome ">
                    </div>
                </div>
            </div>

            <div class="form-grou mt-3">
                <label for="exampleFormControlInput1 ">Endereço de email</label>
                <input type="email " class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
            </div>
            <div class="form-group mt-3">
                <label for="exampleFormControlSelect1 ">Tipo</label>
                <select class="form-control " id="exampleFormControlSelect1">
                    <option disabled selected>Selecione uma opção...</option>
                    <option value="info ">Informações</option>
                    <option value="rec ">Reclamações</option>
                    <option value="elog ">Elogios</option>
                    <option value="sug ">Sugestões</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control " id="exampleFormControlTextarea1" rows="3" placeholder="Escreva sua mensagem "></textarea>
            </div>

            <input type="submit" class="btn btn-primary m-3" value="Enviar"></input>

        </form>
    </section>

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