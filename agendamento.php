
<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['data']);
  // print('<br>');
  // print_r($_POST['nome']);
   //print('<br>');
   //print_r($_POST['func']);
   //print('<br>');
   //print_r($_POST['serv']);
   //print('<br>');

   include_once('config.php');

   $data = $_POST['hora'];
   $nome = $_POST['nome'];
   $func = $_POST['func'];
   $serv =  $_POST['serv'];
   
    $result = mysqli_query($conexao, "INSERT INTO agendamento (hora,nome_cli,nome_func,serv) 
    VALUES ('$data','$nome','$func','$serv')");

    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="css/agendamento.css">
</head>
<body>


    <header class="l-header" id="header">
        <div class="navbar container flex">
            <div class="brand">
                <a href="#">
                    <img src="img/logoA.png" alt="Studio Hair">
                 </a> 
                 <span>Agendamento</span>
            </div>


            <form action="agendamento.php" method="POST">

                <label class="dataL">Seleciona a data e a hora desejada</label> <input type="datetime-local" class="hora"  name="hora" id="hora">
           

                <label class="nomeL" >Digite o nome do(a) cliente</label> <input type="text" class="nome" name="nome" id="nome">

                <label class="funcL" >Digite o nome do funcionario(a)</label> <input type="text" class="func" name="func" id="func">

                <label class="servL" >Digite o serviço</label> <input type="text" class="serv" name="serv" id="serv">


                <input type="submit" class="enviar" name="submit" id="submit">

          </form>  

         
    <?php

    include("config.php");
    
    
    $sql ="SELECT * FROM agendamento";
    
    $result =$conexao->query($sql);
    
    ?>

<table>

     <tr>
         <td>Código</td>
         <td>Hora</td>
         <td>Nome</td>
         <td>Funcionario</td>
         <td>Serviço</td>
         <td>Ação</td>
     </tr>

<?php
         while($user_data = mysqli_fetch_assoc($result)) {
            
                        echo "<tr>";
                       
                      
                        echo "<td>".$user_data['id']."</td>";
                       
                        
                        echo "<td>".$user_data['hora']."</td>";
                        
                        
                        echo "<td>".$user_data['nome_cli']."</td>";
                        
                        
                        echo "<td>".$user_data['nome_func']."</td>";
                        
                        
                        echo "<td>".$user_data['serv']."</td>";
                    
                        echo "<td>
                            <a href='deleteAgen.php?id=$user_data[id]' title='Deletar'>Deletar </a>
                            </td>";

                            echo "</tr>";
                    }
                    ?>
    
    </table>
    <a href="index.php">voltar</a>
</body>
</html>

