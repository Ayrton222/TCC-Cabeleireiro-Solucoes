<?php 

include("comentarios.php");

$id = $_GET['id'];
$saberr = mysqli_query($conexao,"SELECT * FROM funcionario WHERE id='$id'");
$saber = mysqli_fetch_assoc($saberr);
$email = $saber["email"];

if($email == $login_cookie){
    header("myprofile.php");
}

$pubs = mysqli_query($conexao,"SELECT * FROM funcionario  WHERE user='$email' ORDER BY id DESC");

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where's My Player</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/profile.css">
</head>



<body>



<?php
    if($saber["img"] ==""){
        echo'<img src="img/user.png" id="profile">';
    }else{
        echo'<img src="upload/'.$saber["img"].'" id="profile">';
    }
?>
<div id="menu">
    <h4>
         <?php echo " &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp". $saber['nome']." <br />&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$saber['email']?>
    </h4>

    <h5>Barbearia: etecia</h5>

    <h5>Especialidade: cortes</h5>

    
</div>

<div id="publish">
    <form action="comentsF.php" method="POST" enctype="multipart/form-data">
        <br />
    <textarea placeholder="Escreva algo aqui..." name="texto"></textarea>
    <label for="file-input">
        <img src="img/aaa.png" title="Inserir uma fotografia">
    </label>
    <input type="submit" value="Publicar" name="publish">

    <input type="file" id="file-input" name="file" hidden>
    </form>
  </div>


   
<?php 
    while($funcionario=mysqli_fetch_assoc($pubs)){
        $email = $funcionario['user'];
        $saberr = mysqli_query($conexao,"SELECT * FROM funcionario WHERE email='$email'");
        $saber = mysqli_fetch_assoc($saberr);
        $nome = $saber['nome']." " .$saber['email'];
        $id = $funcionario['id'];

        if($funcionario['imagem']==""){
            echo'<div class="pub" id="'.$id.'">
            <p><a href="profile.php?id='.$saber['id'].'">'.$nome.'</a>
            '.$funcionario["dataa"].'
            </p>
            <span>'.$funcionario['texto'].'</span><br/>
            </div>';
        }else {
            echo'<div class="pub" id="'.$id.'">
            <p><a href="#">'.$nome.'</a>
             '.$funcionario["dataa"].'
            </p>
            <span>'.$funcionario['texto'].'</span><br/>
            <img src="upload/'.$funcionario["imagem"].'"/>
            </div>';
        }
    }
?>

<a href="indexF.php">voltar</a>
</body>
</html>