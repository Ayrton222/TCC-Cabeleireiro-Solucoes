<?php 

include("comentariosU.php");

$pubs = mysqli_query($conexao,"SELECT * FROM usuario ORDER BY id DESC");

    if(isset($_POST['publish'])){
        if ($_FILES["file"]["error"] > 0) {
            $texto = $_POST["texto"];
            $hoje = date("Y-m-d");

            if($texto == ""){
                Echo"<p>Escreva Algo!</p>";
            }else {
                $query = "INSERT INTO usuario (user, texto, dataa) VALUES ('$login_cookie','$texto','$hoje')";
                $data = mysqli_query($conexao, $query) or die (mysqli_error($conexao));
                if ($data) {
                    header("location: feedback.php ");
                }else{
                    Echo"<p>Algo deu errado!</p>";
                }
            }
        }else {
            $a = rand(0,10000000);
            $img = $n.$_FILES["file"]["name"];
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$img);

            $texto = $_POST['texto'];
            $hoje = date("Y-m-d");

            if($texto == ""){
                Echo'<p>Escreva Algo!</p>';
            }else {
                $query = "INSERT INTO usuario (user, texto, imagem, dataa) VALUES ('$login_cookie','$texto','$img','$hoje')";
                $data = mysqli_query($conexao, $query) or die (mysqli_error($conexao));
                if ($data) {
                    header("location: feedback.php");
                }else{
                    Echo"<p>Algo deu errado!</p>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where's My Player</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/coments.css">
</head>



<body>

  </div>
  </div>
   

<?php 
    while($usuario=mysqli_fetch_assoc($pubs)){
        $email = $usuario['user'];
        $saberr = mysqli_query($conexao,"SELECT * FROM usuario WHERE email='$email'");
        $saber = mysqli_fetch_assoc($saberr);
        $nome = $saber["nome"]." " .$saber['email'];
        $id = $usuario['id'];

        if($usuario['imagem']==""){
            echo'<div class="pub" id="'.$id.'">
            <p>'.$nome.'</a>
            '.$usuario["dataa"].'
            </p>
            <span>'.$usuario['texto'].'</span><br/>
            </div>';
        }else {
            echo'<div class="pub" id="'.$id.'">
            <p><a href="">'.$nome.'</a>
             '.$usuario["dataa"].'
            </p>
            <span>'.$usuario['texto'].'</span><br/>
            <img src="upload/'.$usuario["imagem"].'"/>
            </div>';
        }
    }
?>



<a href="index.php">voltar</a>
</body>
</html>