<?php 
    include_once "../factory/conexao.php";
    $cod = $_POST["cxcod"];
    $amigo = $_POST["cxamigo"];
    $email = $_POST["cxemail"];
    $telefone = $_POST["cxtelefone"];
    $whats = $_POST["cxwhats"];
    $datanasc = $_POST["cxnascimento"];

    $alterar = "
        UPDATE tbamigos SET
        amigo = '$amigo',
        email = '$email',
        telefone = '$telefone',
        whats = '$whats',
        datanasc = '$datanasc'
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
<a href="../view/telaamigos.php">Voltar</a>