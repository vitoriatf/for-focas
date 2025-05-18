<?php 
    include_once "../factory/conexao.php";
    $cod = $_GET["cod"];
    $nome = $_POST["cxnome"];
    $comercio = $_POST["cxcomercio"];
    $telefone = $_POST["cxtelefone"];
    $whats = $_POST["cxwhats"];

    $alterar = "
        UPDATE tbcormecial SET
        nome = '$nome',
        comercio = '$comercio',
        telefone = '$telefone',
        whats = '$whats'
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
<a href="../view/telacomercial.php">Voltar</a>