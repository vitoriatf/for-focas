<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styletelas.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <h1>Consulta Comércio</h1>
        <div class="nav-links">
            <a href="../index.php">Log-in</a>
            <a href="menu.php">Menu</a>
        </div>
    </div>
    <div class="content">
        <section id="form-cadastro">
            <form action="../model/inseriruser.php" method="POST">
                <h2>Cadastrar Usuário</h2>
                Nome: <br>
                <input type="text" name="cxnome"/><br/>
                Email: <br>
                <input type="email" name="cxemail"/><br/>
                Senha: <br>
                <input type="password" name="cxsenha"/><br/>
                <input type="submit" value="Gravar">
            </form>
        </section>
        <section id="form-busca">
            <form action="consultanomeuser.php" method="POST">
                <h2>Buscar um Usuário</h2>
                Digite o nome completo:
                <input type="text" name="cxpesquisanome">
                <input type="submit" value="Buscar">
                <p>*você poderá alterar ou deletar os dados do seu usuário após realizar sua busca</p>
            </form>
        </section>
    </div>
    <div class="footer">
        &copy; Vitória Takeshita Ferranti - 3° INFO
    </div>

    <script src="../js/script.js"></script>

</body>
</html>