<?php 

include("comentarios.php");

$pubs = mysqli_query($conexao,"SELECT * FROM funcionario ORDER BY id DESC");

    if(isset($_POST['publish'])){
        if ($_FILES["file"]["error"] > 0) {
            $texto = $_POST["texto"];
            $hoje = date("Y-m-d");

            if($texto == ""){
                Echo"<p>Escreva Algo!</p>";
            }else {
                $query = "INSERT INTO funcionario (user, texto, dataa) VALUES ('$login_cookie','$texto','$hoje')";
                $data = mysqli_query($conexao, $query) or die (mysqli_error($conexao));
                if ($data) {
                    header("location: comentsF.php ");
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
                $query = "INSERT INTO funcionario (user, texto, imagem, dataa) VALUES ('$login_cookie','$texto','$img','$hoje')";
                $data = mysqli_query($conexao, $query) or die (mysqli_error($conexao));
                if ($data) {
                    header("location: comentsF.php");
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

<div id="publish">
    <form action="coments.php" method="POST" enctype="multipart/form-data">
        <br />
    <textarea placeholder="Escreva algo aqui..." name="texto"></textarea>
    <label for="file-input">
        <img src="img/aaa.png" title="Inserir uma fotografia">
    </label>
    <input type="submit" value="Publicar" name="publish">

    <input type="file" id="file-input" name="file" hidden>
    </form>
  </div>
  </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
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
            <p><a href="profile.php?id='.$saber['id'].'">'.$nome.'</a>
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