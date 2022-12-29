<?php

include("config.php");

if(isset($_POST['entrar'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $verifica = mysqli_query($conexao,"SELECT * FROM funcionario WHERE email = '$email' AND senha='$pass'");
    if(mysqli_num_rows($verifica)<=0){
        echo"<h3>Palavra-passe ou e-mail errado</h3>";
    }else{
        setcookie("login", $email);
        header("location: comentsF.php");

    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login_comentario.css"> 
</head>
<body>
    
<img src="img/aaa.png" class="aoba">
<h2>Entra na conta</h2>
<form method="POST">
    <input type="email" placeholder="endereco email" name="email"><br />
    <input type="password" placeholder="Palavra-passe" name="pass"><br />
    <input type="submit" value="Entrar" name="entrar">
</form>

<img src="img/cabeleireiro24.png" class="b">

<img src="img/cabeleireiro32.png" class="ba">

<a href="indexF.php">voltar</a>
</body>
</html>