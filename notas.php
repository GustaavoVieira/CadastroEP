<?php
    include('protect.php');
    include('conn.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Candidatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .card-header {
            background: linear-gradient(90deg, #4CAF50, #FFC107);
            color: #fff;
            padding: 1rem 1.5rem;
            border-bottom: none;
        }

        .card-header h4 {
            margin: 0;
        }

        .card-header form {
            margin-top: 10px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .card-header input[type="text"] {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .card-header button {
            background-color: #FF9800;
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .card-header button:hover {
            background-color: #e68a00;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        .btn-secondary {
            background-color: #8BC34A;
            border: none;
        }

        .btn-success {
            background-color: #FFC107;
            border: none;
            color: black;
        }

        .btn-danger {
            background-color: #FF5722;
            border: none;
        }

        .btn-danger:hover {
            background-color: #e64a19;
        }

        .btn-sm {
            margin-right: 4px;
        }

        .float-end {
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .card-header form {
                flex-direction: column;
            }

            .btn-sm {
                margin-top: 4px;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista dos Candidatos</h4>
                        <form action="">
                            <input type="text" name="busca" placeholder="Insira o nome do candidato">
                            <button type="submit">Pesquisar</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Curso</th>
                                    <th>Cota</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(!isset($_GET['busca'])){
                                ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        Digite algo para pesquisar...
                                    </td>
                                </tr>
                                <?php 
                                    } else{
                                        $pesquisa = $mysqli->real_escape_string($_GET['busca']);
                                        $sql_code = "SELECT * FROM candidato WHERE nome LIKE '%$pesquisa%'";
                                        $sql_query = $mysqli->query($sql_code) or die("ERRO ao consultar!" . $mysqli->error);
                                        
                                        if($sql_query->num_rows == 0){
                                ?>
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">
                                                    Nenhum resultado encontrado...
                                                </td>
                                            </tr>
                                        <?php } else {
                                                while($dados = $sql_query->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?= $dados['nome'] ?></td>
                                            <td><?= $dados['cpf'] ?></td>
                                            <td><?= $dados['curso'] ?></td>
                                            <td><?= $dados['cota'] ?></td>
                                            <td>
                                                <a href="cadastronotas.php?cpf=<?= $dados['cpf'] ?>" class="btn btn-secondary btn-sm">Notas</a>
                                                <form action="acoes.php" method="post" class="d-inline">
                                                    <button onclick="return confirm('Deseja realmente excluir?')" type="submit" name="delete_candidato" class="btn btn-danger btn-sm" value="<?=$dados['cpf'];?>">Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        }
                                ?>
                            </tbody>
                        </table>
                        <a href="painel.php" class="btn btn-danger float-end">Sair</a>
                        <form action="acoes.php" method="post" class="d-inline">
                            <button type="submit" name="gerar_resultado" class="btn btn-secondary">Resultados</button>
                            <button type="submit" name="fim_selecao" class="btn btn-warning">Encerrar seleção</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
