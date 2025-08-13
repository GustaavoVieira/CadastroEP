<?php
require('protect.php');
require('conn.php');

$cursos = ['inf', 'enf', 'ds', 'adm'];
$nomesCompletos = [
    'inf' => 'Informática',
    'enf' => 'Enfermagem',
    'ds'  => 'Desenvolvimento de Sistemas',
    'adm' => 'Administração'
];

$contagem = [];
$labels = [];

foreach ($cursos as $curso) {
    $stmt = $mysqli->prepare("SELECT COUNT(*) AS total FROM candidato WHERE curso = ?");
    $stmt->bind_param("s", $curso);
    $stmt->execute();
    $resultado = $stmt->get_result()->fetch_assoc();
    $contagem[] = $resultado['total'];
    $labels[] = $nomesCompletos[$curso];
    $stmt->close();
}

$mysqli->close();

$labels_json = json_encode($labels);
$valores_json = json_encode($contagem);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gráfico por Curso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            width: 100vw;
            background-image: url('img/cadastro.png');
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .grafico-container {
        width: 90%;
        max-width: 800px;
        height: auto;
        background-color: rgb(255, 255, 255);
        border-radius: 10px;
        padding: 20px;
        position: relative;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .grafico-container canvas {
        width: 100% !important;
        height: 300px !important; /* Altura fixa para não ultrapassar o card */
        }

        .grafico-container h2 {
        text-align: center;
        margin-bottom: 20px;
        }

        h2 {
            color: black;
            font-weight: bold;
            font-style: oblique;
            margin-bottom: 15px;
        }

        .botao-voltar {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .botao-voltar a button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<body>
    <div class="grafico-container">
        <h2>Quantidade de candidatos por curso</h2>
        <canvas id="graficoCursos"></canvas>
    </div>

    <div class="botao-voltar">
        <a href="painel.php">
            <button class="btn btn-danger">Voltar</button>
        </a>
    </div>

    <script>
        const ctx = document.getElementById('graficoCursos').getContext('2d');

        const data = {
            labels: <?= $labels_json ?>,
            datasets: [{
                label: 'Alunos por Curso',
                data: <?= $valores_json ?>,
                backgroundColor: [
                    '#36A2EB',
                    '#FF6384',
                    '#9966FF',
                    '#FFCE56'
                ],
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true
                    },
                    datalabels: {
                        anchor: 'end',
                        align: 'end',
                        formatter: function (value) {
                            return value;
                        },
                        font: {
                            weight: 'bold',
                            size: 14
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        precision: 0,
                        title: {
                            display: true,
                            text: 'Número de Candidatos'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        };

        new Chart(ctx, config);
    </script>
</body>
</html>
