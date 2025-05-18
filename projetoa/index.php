<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Log-in</title>
</head>
<body>
    <div class="navbar">
        <h1>Log-in</h1>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Perfil</a>
            <a href="#">Configurações</a>
            <a href="#">Sair</a>
        </div>
    </div>
    <section>
        <figure>
            <img src="img/foto.png" alt="">
        </figure>
        <header>
            <form action="model/open.php" method="POST">
                <h1>Login</h1> <br>
                Email: <br>
                <input type="email" name="cxemail"><br>
                Senha: <br>
                <input type="password" name="cxsenha"><br>
                <br/>
                <input type="submit" value="Acessar">
                <p>Não tem login? <a href="view/telacaduser.php#form-cadastro">Cadastre-se.</a></p>
            </form>
        </header>
    </section>
    <div class="footer">
        &copy; Vitória Takeshita Ferranti - 3° INFO
    </div>
</body>
</html>