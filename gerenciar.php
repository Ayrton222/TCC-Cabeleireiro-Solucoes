<?php

include("config.php");


$sql ="SELECT * FROM funcionario";

$result =$conexao->query($sql);

?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar</title>

    <link rel="stylesheet" href="./css/gerenciar.css"> 

</head>
<body>

    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="./img/aaaa.png"></img>
                </div>
                
                <div class="entrar">
                    <button class="btn"><a href="index.php">Voltar</a></button>
                </div>
             </div>
        </main>
    </header>
    <h1>Funcionarios: </h1>

    <table border="1">

     <tr>
         <td>Código</td>
         <td>Nome</td>
         <td>Senha</td>
         <td>email</td>
         <td>telefone</td>
         <td>sexo</td>
         <td>data_nasc</td>
         <td>cidade</td>
         <td>estado</td>
         <td>endereco</td>
         <td>Ação</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['telefone']."</td>";
                        echo "<td>".$user_data['sexo']."</td>";
                        echo "<td>".$user_data['data_nasc']."</td>";
                        echo "<td>".$user_data['cidade']."</td>";
                        echo "<td>".$user_data['estado']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>
                            <a href='editar.php?id=$user_data[id]' title='Editar'>Editar</a> |
                            <a href='delete.php?id=$user_data[id]' title='Deletar'>Deletar </a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>


    </table>
    

    <a href="indexF.php">voltar</a>
</body>
</html>