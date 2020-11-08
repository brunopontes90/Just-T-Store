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

<main class="container">
    <form action="post" action="/php/excluirUsuario.php">
        <div class="d-flex justify-content-start">
            <p class="mb-0 mt-0 p-5 text-muted font-weight-bold">Nome</p>
            <p class="mb-0 mt-0 p-5 text-muted font-weight-bold">Sobrenome</p>
            <p class="mb-0 mt-0 p-5 text-muted font-weight-bold">E-mail</p>
        </div>
        <hr class="mt-0">
        

    </form>
</main>
  
</body>
</html>