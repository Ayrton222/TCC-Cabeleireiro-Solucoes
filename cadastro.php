<?php

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
       // print('<br>');
       // print_r($_POST['email']);
       // print('<br>');
       // print_r($_POST['telefone']);
        //print('<br>');
       // print_r($_POST['genero']);
       // print('<br>');
      //  print_r($_POST['data_nascimento']);
       // print('<br>');
       // print_r($_POST['cidade']);
       // print('<br>');
       // print_r($_POST['estado']);
       // print('<br>');
       // print_r($_POST['endereco']);

        include_once('config.php');

       $nome = $_POST['nome'];
       $senha = $_POST['senha'];
       $email = $_POST['email'];
       $telefone =  $_POST['telefone'];
       $sexo = $_POST['genero'];
       $nascimento = $_POST['data_nascimento'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuario (nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$nascimento','$cidade','$estado','$endereco' )");

        
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar</title>
    <link rel="stylesheet" href="./css/cadastro.css">

</head>
<body>

    <div class="box">

        <form action="cadastro.php" method="POST">

            <fieldset>

                <legend><b>Formulário de Cliente</b></legend>
                <br>
            
                <div class="inputBox">

                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo </label>

                </div>

                <br><br>

                   
                <div class="inputBox">

                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha </label>

                </div>

                <br><br>

                <div class="inputBox">

                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>

                </div>

                <br><br>

                <div class="inputBox">

                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">telefone</label>

                </div>

                <p>Sexo:</p>

                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>

                <br>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>

                <br>

                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>

                <br><br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <br><br><br>

                <div class="inputBox">

                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>

                </div>

                <br><br>

                <div class="inputBox">

                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>

                </div>

                <br><br>

                <div class="inputBox">

                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit"><a href="login.php">entrar</a>

            </fieldset>

        </form>

    </div>

<img src="img/cabeleireiro32.png">

    
</body>
</html>