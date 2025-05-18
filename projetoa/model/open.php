<?php
    include_once "../factory/conexao.php";
    
    SESSION_START();

    $email = $_POST ["cxemail"];
    $senha = $_POST ["cxsenha"];
    $sql = "select * from tbusuario WHERE email = '$email' AND senha = '$senha' ";
    $result = mysqli_query ($conn,$sql);
    if(mysqli_num_rows ($result) > 0){
        $_SESSION ["email"] = $email;
        $_SESSION ["senha"] = $senha;
        header ('location:../view/menu.php');
    }
    else{
        echo "E-mail ou senha errados!";
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
    };

?>
<br>
<a href="../index.php">Voltar</a>