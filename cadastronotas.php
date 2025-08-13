<?php
    include("protect.php");
    require("conn.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            html, body {
                height: 100%;
                width: 100%;
                overflow-x: hidden;
                margin: 0;
                padding: 0;
            }
            body {
                background-image: url('img/cadastro.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            label {
                color: white;
            }
        </style>

    <title>Criar Candidato</title>
</head>

<body class="d-flex align-items-center justify-content-center">
    <section >
        <div class="container bg-success bg-opacity-80 rounded p-4 h-100">
            <?php
                if(isset($_GET['cpf'])){
                    $candidato_cpf = mysqli_real_escape_string($mysqli, $_GET['cpf']);
                    $sql = "SELECT * FROM candidato WHERE cpf='$candidato_cpf'";
                    $query = mysqli_query($mysqli, $sql);
                    
                    if(mysqli_num_rows($query)){
                        $candidato = mysqli_fetch_array($query)
            ?>
            <form  method="POST" action="acoes.php">
                <h2 class="text-center text-light">Cadastro Notas</h2>
                <input type="hidden" name="candidato_cpf" value="<?=$candidato['cpf']?>">
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Português 1</label>
                                <input type="text" name="port1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Português 2</label>
                                <input type="text" name="port2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Português 3</label>
                                <input type="text" name="port3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Português 4</label>
                                <input type="text" name="port4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Matemática 1</label>
                                <input type="text" name="mat1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Matemática 2</label>
                                <input type="text" name="mat2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Matemática 3</label>
                                <input type="text" name="mat3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Matemática 4</label>
                                <input type="text" name="mat4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ciências 1</label>
                                <input type="text" name="c1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ciências 2</label>
                                <input type="text" name="c2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ciências 3</label>
                                <input type="text" name="c3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ciências 4</label>
                                <input type="text" name="c4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Geografia 1</label>
                                <input type="text" name="geo1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Geografia 2</label>
                                <input type="text" name="geo2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Geografia 3</label>
                                <input type="text" name="geo3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Geografia 4</label>
                                <input type="text" name="geo4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">História 1</label>
                                <input type="text" name="his1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">História 2</label>
                                <input type="text" name="his2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">História 3</label>
                                <input type="text" name="his3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">História 4</label>
                                <input type="text" name="his4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Língua  Estrangeira 1</label>
                                <input type="text" name="le1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Língua  Estrangeira 2</label>
                                <input type="text" name="le2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Língua  Estrangeira 3</label>
                                <input type="text" name="le3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Língua  Estrangeira 4</label>
                                <input type="text" name="le4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ed. Física 1</label>
                                <input type="text" name="edf1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ed. Física 2</label>
                                <input type="text" name="edf2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ed. Física 3</label>
                                <input type="text" name="edf3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ed. Física 4</label>
                                <input type="text" name="edf4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ensino Religioso 1</label>
                                <input type="text" name="er1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ensino Religioso 2</label>
                                <input type="text" name="er2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ensino Religioso 3</label>
                                <input type="text" name="er3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>3
                            <div class="col">
                                <label for="inputAddress" class="form-label">Ensino Religioso 4</label>
                                <input type="text" name="er4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
                <div class="row g-3">
                            <div class="col">
                                <label for="inputAddress" class="form-label">Artes 1</label>
                                <input type="text" name="art1" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Artes 2</label>
                                <input type="text" name="art2" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Artes 3</label>
                                <input type="text" name="art3" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="inputAddress" class="form-label">Artes 4</label>
                                <input type="text" name="art4" class="form-control" id="inputAddress" placeholder="Nome">
                            </div>

                </div>
               

                
           
                
                <div class="col-12 d-flex flex-column flex-md-row justify-content-between">
                    <button type="submit" class="btn btn-warning mb-2 mb-md-0" name="notas_usuario">Enviar</button>
                    <button class="btn btn-danger mb-2 mb-md-0 " name="voltar">
                        <a href="notas.php" class="text-white text-decoration-none">Voltar</a>
                    </button>
                </div>
            </form>
            <?php
                }else{
                    echo "<h5>Usuário não encontrado</h5>";
                }

            }
            ?>
        </div>
    </section>
</body>

</html>
