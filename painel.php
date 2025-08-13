<?php
    include("protect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #navbar{
            background-color: #45b16e;
        }body{
            width: 100vw;
            height: 100vh;
            background-size: 100% 100%;  
            background-position: center;  
            background-repeat: no-repeat;  
            background-image: url('img/background.png');
        }
        section>div>a{
            background-color: #fccf05;
        }
        
        
    
    
    </style>
</head>         
<body >
    <section class="d-flex align-items-center justify-content-center h-100">
        <div class="container d-flex flex-row align-items-center justify-content-center grid gap-2" style="height: 30vh; width:100vw;">
            <a href="cadastro.php" class="d-flex align-items-center justify-content-center rounded-2 h-50 w-25 text-center link-underline link-underline-opacity-0 link-light">
                <h3>Cadastro</h3>
            </a>
            
            <a href="notas.php" class="d-flex align-items-center justify-content-center rounded-2 h-50 w-25 text-center link-underline link-underline-opacity-0 link-light">
                <h3>Notas</h3>
            </a>
            <a href="grafico.php" class="d-flex align-items-center justify-content-center rounded-2 h-50 w-25 text-center link-underline link-underline-opacity-0 link-light">
                <h3>Gráficos</h3>
            </a>
        </div>
    </section>
    
    
</body>
</html>