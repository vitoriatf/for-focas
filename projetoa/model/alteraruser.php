<?php 
    include_once "../factory/conexao.php";
    $cod = $_POST["cxcod"];
    $nome = $_POST["cxnome"];
    $email = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];

    $alterar = "
        UPDATE tbusuario SET
        nome = '$nome',
        email = '$email',
        senha = '$senha'
        WHERE
        cod = '$cod'
    ";

    $executar = mysqli_query($conn,$alterar);
    if ($executar){
            echo "Dados Alterados com sucesso!";
    }
    else{
            echo "Erro ao alterar os dados!";
    }
?>
<br>
<a href="../view/telacaduser.php">Voltar</a>