<?php
    include_once "../factory/conexao.php";
    $id = $_GET["id"];
    $excluir = "delete from tbcormecial where cod = '$id'";
    $executar = mysqli_query($conn, $excluir);
    if($executar){
        echo "Usuário excluído com sucesso!";
        echo "<br>";
        echo "<a href='../view/telacomercial.php'> Voltar</a>";
    }
    else{
        echo "Erro ao excluir o usuário";
        echo "<br>";
        echo "<a href='../view/telacomercial.php'> Voltar</a>";

    }
?>