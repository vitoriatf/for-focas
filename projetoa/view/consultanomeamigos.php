<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleconsulta.css">
    <title>Consulta Amigos</title>
</head>
<body>
    <?php
        include_once "../factory/conexao.php";
        $nome = $_POST["cxpesquisanome"];
        $consulta = "select *from tbamigos where amigo = '$nome'";
        $executar = mysqli_query($conn,$consulta);
        $linha = mysqli_fetch_array($executar);
    ?>
    <div class="navbar">
        <h1>Consulta Amigos</h1>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Perfil</a>
            <a href="#">Configurações</a>
            <a href="#">Sair</a>
        </div>
    </div>
    <div class="content">
        <form action="../model/alteraramigos.php" method="POST">
            <div class="hidden">
                Código: <br>
                <input type="text" name="cxcod" value="<?php echo $linha ["cod"]?>" readonly/> <br/>
            </div>
            Amigo: <br/>
            <input type="text" name="cxamigo" value="<?php echo $linha ["amigo"]?>"/> <br/>
            Email: <br/>
            <input type="email" name="cxemail" value="<?php echo $linha ["email"]?>"/> <br/>
            Telefone: <br/>
            <input type="text" name="cxtelefone" value="<?php echo $linha ["telefone"]?>"/> <br/>
            Whats: <br/>
            <input type="text" name="cxwhats" value="<?php echo $linha ["whats"]?>"/> <br/>
            Data de nascimento:
            <input type="date" name="cxnascimento" value="<?php echo $linha ["datanasc"]?>"/> <br/>
            <input type="submit" value="Alterar">
            <a href="../model/deletaramigos.php?id=<?php echo $linha["cod"] ?>">Excluir</a>
        </form>
    </div>
    <div class="footer">
        &copy; Vitória Takeshita Ferranti - 3° INFO
    </div>
</body>
</html>