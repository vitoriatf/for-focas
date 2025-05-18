<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/stylemenu.css">
    <?php
        SESSION_START();
        if((!isset($_SESSION["email"])==true) &&(!isset($_SESSION["senha"])==true)){
            header("location:../index.php");
        }
        $logado = $_SESSION['email'];
    ?>
</head>
<body>
    <header class="navbar">
        <div class="nav-separar">
            <img src="../img/logo.png" alt="Logo">
            <h1>For - Focas</h1>
        </div>
        <div class="nav-separar">
            <span>Usuário: <?php echo $logado; ?></span>
            <a href="../model/sair.php">SAIR</a>
        </div>
    </header>

    <main class="content">
        <section id="cxprincipal">
            <nav id="cxamigo">
                <a href="telaamigos.php#form-cadastro">Cadastro Amigo</a> <br><br>
                <a href="telaamigos.php#form-cadastro"><img src="../img/amigos_cadastro.png" alt="Amigos"></a>
            </nav>
            <nav id="cxcomercio">
                <a href="telacomercial.php#form-cadastro">Cadastro Comércio</a> <br><br>
                <a href="telacomercial.php#form-cadastro"><img src="../img/comercio_cadastro.png" alt="Comercial"></a>
            </nav>
            <nav id="cxusuario">
                <a href="telacaduser.php#form-cadastro">Cadastro Usuário</a> <br><br>
                <a href="telacaduser.php#form-cadastro"><img src="../img/usuario_cadastro.png" alt="Usuário"></a>
            </nav>
            <nav id="cxconsultaamigo">
                <a href="telaamigos.php#form-busca">Controle de Amigos</a><br><br>
                <a href="telaamigos.php#form-busca"><img src="../img/amigos.png" alt="Amigos"></a>
            </nav>
            <nav id="cxconsultacomercio">
                <a href="telacomercial.php#form-busca">Controle de Comércio</a><br><br>
                <a href="telacomercial.php#form-busca"><img src="../img/comercio.png" alt="Comércio"></a>
            </nav>
            <nav id="cxconsultauser">
                <a href="telacaduser.php#form-busca">Controle de Usuário</a><br><br>
                <a href="telacaduser.php#form-busca"><img src="../img/usuario.png" alt="Usuário"></a>
            </nav>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; Vitória Takeshita Ferranti - 3° INFO</p>
    </footer>
</body>
</html>