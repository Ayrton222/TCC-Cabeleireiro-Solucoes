<?php
    session_start();

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('Nome: ' .$nome);
    //print('<br>');
    //print_r('Email: ' .$email);
    //print('<br>');
    //print_r('Senha: ' .$senha);

    $sql = "SELECT * FROM funcionario WHERE nome = '$nome' and email =  '$email' and senha = '$senha'";

    $result = $conexao->query($sql);


   // print_r($sql);
    //print_r($result);

    if(mysqli_num_rows($result) < 1 )
    {
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: loginT.html');
    }
    else
    {

        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: indexF.php');
    }

}
else
{
    header('Location: loginT.html');
}

?>