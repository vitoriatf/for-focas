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
            <a href="#form-cadastro">Cadastrar</a>
            <a href="#form-busca">Buscar</a>
        </div>
    </div>
    <div class="content">
        <section id="form-cadastro">
            <form action="../model/inserircomercial.php" method="POST">
                <h2>Cadastrar Comércio</h2>
                Nome:
                <input type="text" name="cxnome"/><br/>
                Comércio:
                <input type="text" name="cxcomercio"/><br/>
                Telefone:
                <input type="text" name="cxtelefone"/><br/>
                Whats:
                <input type="text" name="cxwhats"/><br/>
                <input type="submit" value="Gravar">
            </form>
        </section>
        <section id="form-busca">
            <form action="consultanomecomercial.php" method="POST">
                <h2>Buscar um Comércio</h2>
                Digite o nome completo:
                <input type="text" name="cxpesquisanome">
                <input type="submit" value="Buscar">
                <p>*você poderá alterar ou deletar os dados do seu comércio após realizar sua busca</p>
            </form>
        </section>
    </div>
    <div class="footer">
        &copy; Vitória Takeshita Ferranti - 3° INFO
    </div>

    <script src="../js/script.js"></script>
</body>
</html>