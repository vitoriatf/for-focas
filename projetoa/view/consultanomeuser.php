<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleconsulta.css">
    <title>Consulta Usuário</title>
</head>
<body>
    <?php
        include_once "../factory/conexao.php";
        $nome = $_POST["cxpesquisanome"];
        $consulta = "select *from tbusuario where nome = '$nome'";
        $executar = mysqli_query($conn,$consulta);
        $linha = mysqli_fetch_array($executar);
    ?>
    <div class="navbar">
        <h1>Consulta Usuário</h1>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Perfil</a>
            <a href="#">Configurações</a>
            <a href="#">Sair</a>
        </div>
    </div>
    <div class="content">
        <form action="../model/alteraruser.php" method="POST">
            <div class="hidden">
                Código: <br>
                <input type="text" name="cxcod" value="<?php echo $linha ["cod"]?>" readonly/> <br/>
            </div>
            Nome: <br/>
            <input type="text" name="cxnome" value="<?php echo $linha ["nome"]?>"/> <br/>
            Email: <br/>
            <input type="email" name="cxemail" value="<?php echo $linha ["email"]?>"/> <br/>
            Senha: <br/>
            <input type="password" name="cxsenha" value="<?php echo $linha ["senha"]?>"/> <br/>
            <input type="submit" value="Alterar">
            <a href="../model/deletaruser.php?id=<?php echo $linha["cod"] ?>">Excluir</a></body>
        </form>
    </div>
    <div class="footer">
        &copy; Vitória Takeshita Ferranti - 3° INFO
    </div>
</html>