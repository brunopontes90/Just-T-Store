<?php
   
   global $msg;
   
   echo "<script>alert($msg)</script>";
   
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
        <script src="../javascript/casdastro.js"></script>
        <link rel="stylesheet" href="../css/cadastro.css">
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

        <main class="container" id="cadasto">
            <form class="m-5" method='post'>
                <h1 class="h2 text-center text-uppercase text-muted">Cadastro</h1>
                <!-- <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nome</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Sobrenome</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Sobrenome">
                    </div> -->

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="nome@exemplo.com">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Digite o endereço">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Complemento</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Digite sua cidade">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEstado">Estado</label>
                            <select id="inputEstado" class="form-control">
                  <option disabled selected>Escolher...</option>
                        <option>Acre</option>
                    <option>Alagoas</option>
                  <option>Amapá</option>
                    <option>Amazonas</option>
                    <option>Bahia</option>
                    <option>Ceará</option>
                    <option>Distrito Federal</option>
                    <option>Espírito Santo</option>
                    <option>Goiás</option>
                    <option> Maranhão</option>
                    <option>Mato Grosso</option>
                    <option>Mato Grosso do Sul</option>
                    <option>Minas Gerais</option>
                    <option>Pará</option>
                    <option>Paraíba</option>
                    <option>Paraná</option>
                    <option>Pernambuco</option>
                    <option>Piauí</option>
                    <option>Rio de Janeiro</option>
                    <option>Rio Grande do Norte</option>
                    <option>Rio Grande do Sul</option>
                    <option>Rondônia</option>
                    <option>Roraima</option>
                    <option>Santa Catarina</option>
                    <option>São Paulo</option>
                    <option>Sergipe</option>
                   <option> Tocantins</option>
                </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="inputCEP" placeholder="CEP">
                        </div>


                        <!--Cartões-->
                        <!-- <legend class="h5 mb-3 mt-5">Cartão de crédito</legend>

                        <div class="form-group p-1">
                            <label for="numero-cartao">Número - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                        </div>

                        <div class="form-group p-1">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select class="form-control" id="bandeira-cartao">
                                <option disabled selected>Selecione uma opção...</option>
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>

                        <div class="form-group p-1">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                        </div>
                    </div> -->
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">Gostaria de receber novidades em meu e-mail</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3" value="Enviar"></input>
            </form>
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