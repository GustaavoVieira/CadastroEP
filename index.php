<?php
include('conn.php');

if(isset($_POST['login']) && isset($_POST['senha'])){
    if(strlen($_POST['login']) == 0){
        echo "Preencha seu login"; 
    }else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else{
        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM candidato WHERE login = '$login' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha no SQL: " . $mysqli->error);

        $qtd = $sql_query->num_rows;

        if($qtd == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['login'] = $usuario['login'];

            header("Location: painel.php");

        }else{
            echo"<script>alert('Senha ou Usuário incorretos!!')</script>";
        }


    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0; 
        }
        body{
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100vw;
            background-size: 100% 100%;  
            background-position: center;  
            background-repeat: no-repeat;  
            background-image: url('img/background.png');
        }
        form{
            background-color: whitesmoke;
        }
    </style>
    <title>Menu</title>
</head>
<body>
    <section class="d-flex align-items-center justify-content-center h-100">
        <form class="rounded-2 p-5 bg-secondary-color" action="" method="POST">
            <div class="text-center mb-3">
                <img src="img/sb_ep-removebg-preview.png" class="rounded" alt="...">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
            </div>
            <button type="submit" class="btn btn-secondary">Entrar</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>