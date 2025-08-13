<?php
    include("protect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100vw;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url('img/cadastro.png');
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
            <form class="row g-3" method="POST" action="acoes.php">
                
                <div class="col-12 col-md-6">
                    <label for="inputAddress" class="form-label">Nome do Aluno</label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputAddress" class="form-label">Data de nascimento</label>
                    <input type="date" name="dt_nascimento" class="form-control" id="inputAddress">
                </div>

                
                <div class="col-12 col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputPassword4" class="form-label">Telefone</label>
                    <input type="text" name="telefone" class="form-control" id="inputAddress4" placeholder="Telefone">
                </div>

               
                <div class="col-12 col-md-6">
                    <label for="inputAddress2" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="inputAddress2" placeholder="CPF">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputEmail4" class="form-label">Nome (Responsável)</label>
                    <input type="text" name="nome_r" class="form-control" id="inputEmail4" placeholder="Nome responsável">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputAddress2" class="form-label">CPF (Responsável)</label>
                    <input type="text" name="cpf_r" class="form-control" id="inputAddress2" placeholder="CPF">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputAddress3" class="form-label">Telefone (Responsável)</label>
                    <input type="text" name="telefone_r" class="form-control" id="inputAddress3" placeholder="Telefone">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputAddress3" class="form-label">Email (Responsável)</label>
                    <input type="email" name="email_r" class="form-control" id="inputAddress3" placeholder="Email responsável">
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputState" class="form-label">Curso</label>
                    <select id="inputState" class="form-select" name="curso">
                        <option selected>Escolha</option>
                        <option value="enf">Enfermagem</option>
                        <option value="inf">Informática</option>
                        <option value="ds">Desenvolvimento de Sistemas</option>
                        <option value="adm">Administração</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <label for="inputState" class="form-label">Modalidade Cota</label>
                    <select id="inputState" class="form-select" name="cota">
                        <option selected>Escolha</option>
                        <option value="ACP">Ampla Concorrência Pública</option>
                        <option value="ACPR">Ampla Concorrência Privada</option>
                        <option value="PCD">PCD</option>
                        <option value="BP">Bairro(Pública)</option>
                        <option value="BPR">Bairro(Privada)</option>
                    </select>
                </div>

               
                <div class="col-12 d-flex flex-column flex-md-row justify-content-between">
                    <button type="submit" class="btn btn-warning mb-2 mb-md-0" name="create_usuario">Cadastrar</button>
                    <button class="btn btn-danger mb-2 mb-md-0 " name="voltar">
                        <a href="painel.php" class="text-white text-decoration-none">Voltar</a>
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
