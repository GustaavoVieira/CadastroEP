<?php
include('conn.php');

if (isset($_POST['create_usuario'])) {
        $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
        $dt_nascimento = mysqli_real_escape_string($mysqli, trim($_POST['dt_nascimento']));
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
        $telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
        $cpf = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
        $nome_r = mysqli_real_escape_string($mysqli, trim($_POST['nome_r']));
        $endereco = mysqli_real_escape_string($mysqli, trim($_POST['endereco']));
        $cpf_r = mysqli_real_escape_string($mysqli, trim($_POST['cpf_r']));
        $email_r = mysqli_real_escape_string($mysqli, trim($_POST['email_r']));
        $telefone_r = mysqli_real_escape_string($mysqli, trim($_POST['telefone_r']));
        $curso = mysqli_real_escape_string($mysqli, trim($_POST['curso']));
        $cota = mysqli_real_escape_string($mysqli, trim($_POST['cota']));

        if ($nome == "" || $dt_nascimento == "" || $email == "" || $telefone == "" || $cpf == "" || $nome_r == "" || $endereco == "" || $cpf_r == "" || $email_r == "" || $telefone_r == "" || $curso == "" ||  $cota == "") {
            echo "<script>
                        alert('Dados incompletos, tente novamente!');
                        window.location.href = 'cadastro.php';
                 </script>";

            
        }else{
            $query = "INSERT INTO candidato (nome, nome_res, endereco, dt_nascimento, cota, cpf, curso, email, telefone, cpf_res, telefone_res, email_res) VALUES('$nome', '$nome_r', '$endereco', '$dt_nascimento', '$cota', '$cpf', '$curso', '$email', '$telefone', '$cpf_r', '$telefone_r', '$email_r')";

            mysqli_query($mysqli, $query);

            if(mysqli_affected_rows($mysqli) > 0){
                echo "<script>
                        alert('Candidato cadastrado!');
                        window.location.href = 'cadastro.php';
                    </script>";
                exit;
            }else{
                echo "<script>alert('[ERRO]Candidato não cadastrado')</script>";
                header('Location: cadastro.php');
                exit;
            }

        }
    


}elseif (isset($_POST['voltar'])) {
    header('Location: cadastro.php');
}elseif(isset($_POST['notas_usuario'])){
    $candidato_cpf = mysqli_real_escape_string($mysqli, $_POST['candidato_cpf']);

    $port1 = mysqli_real_escape_string($mysqli, trim($_POST['port1']));
    $port2 = mysqli_real_escape_string($mysqli, trim($_POST['port3']));
    $port3 = mysqli_real_escape_string($mysqli, trim($_POST['port3']));
    $port4 = mysqli_real_escape_string($mysqli, trim($_POST['port4']));
    $mat1 = mysqli_real_escape_string($mysqli, trim($_POST['mat1']));
    $mat2 = mysqli_real_escape_string($mysqli, trim($_POST['mat2']));
    $mat3 = mysqli_real_escape_string($mysqli, trim($_POST['mat3']));
    $mat4 = mysqli_real_escape_string($mysqli, trim($_POST['mat4']));
    $c1 = mysqli_real_escape_string($mysqli, trim($_POST['c1']));
    $c2 = mysqli_real_escape_string($mysqli, trim($_POST['c2']));
    $c3 = mysqli_real_escape_string($mysqli, trim($_POST['c3']));
    $c4 = mysqli_real_escape_string($mysqli, trim($_POST['c4']));
    $geo1 = mysqli_real_escape_string($mysqli, trim($_POST['geo1']));
    $geo2 = mysqli_real_escape_string($mysqli, trim($_POST['geo2']));
    $geo3 = mysqli_real_escape_string($mysqli, trim($_POST['geo3']));
    $geo4 = mysqli_real_escape_string($mysqli, trim($_POST['geo4']));
    $his1 = mysqli_real_escape_string($mysqli, trim($_POST['his1']));
    $his2 = mysqli_real_escape_string($mysqli, trim($_POST['his2']));
    $his3 = mysqli_real_escape_string($mysqli, trim($_POST['his3']));
    $his4 = mysqli_real_escape_string($mysqli, trim($_POST['his4']));
    $le1 = mysqli_real_escape_string($mysqli, trim($_POST['le1']));
    $le2 = mysqli_real_escape_string($mysqli, trim($_POST['le2']));
    $le3 = mysqli_real_escape_string($mysqli, trim($_POST['le3']));
    $le4 = mysqli_real_escape_string($mysqli, trim($_POST['le4']));
    $edf1 = mysqli_real_escape_string($mysqli, trim($_POST['edf1']));
    $edf2 = mysqli_real_escape_string($mysqli, trim($_POST['edf2']));
    $edf3 = mysqli_real_escape_string($mysqli, trim($_POST['edf3']));
    $edf4 = mysqli_real_escape_string($mysqli, trim($_POST['edf4']));
    $er1 = mysqli_real_escape_string($mysqli, trim($_POST['er1']));
    $er2 = mysqli_real_escape_string($mysqli, trim($_POST['er2']));
    $er3 = mysqli_real_escape_string($mysqli, trim($_POST['er3']));
    $er4 = mysqli_real_escape_string($mysqli, trim($_POST['er4']));
    $art1 = mysqli_real_escape_string($mysqli, trim($_POST['art1']));
    $art2 = mysqli_real_escape_string($mysqli, trim($_POST['art2']));
    $art3 = mysqli_real_escape_string($mysqli, trim($_POST['art3']));
    $art4 = mysqli_real_escape_string($mysqli, trim($_POST['art4']));

    if ($port1 == "" || $port2 == "" || $port3 == "" || $port4 == "" ||
    $mat1 == "" || $mat2 == "" || $mat3 == "" || $mat4 == "" ||
    $c1 == "" || $c2 == "" || $c3 == "" || $c4 == "" ||
    $geo1 == "" || $geo2 == "" || $geo3 == "" || $geo4 == "" ||
    $his1 == "" || $his2 == "" || $his3 == "" || $his4 == "" ||
    $le1 == "" || $le2 == "" || $le3 == "" || $le4 == "" ||
    $edf1 == "" || $edf2 == "" || $edf3 == "" || $edf4 == "" ||
    $er1 == "" || $er2 == "" || $er3 == "" || $er4 == "" ||
    $art1 == "" || $art2 == "" || $art3 == "" || $art4 == "") {
        echo "<script>
                    alert('Dados incompletos, tente novamente!');
                    window.location.href = 'cadastro.php';
             </script>";

        
    }else{
        $query = "UPDATE candidato SET portugues1 = '$port1', portugues2 = '$port2', portugues3 = '$port3', portugues4 = '$port4', matematica1 = '$mat1', matematica2 = '$mat2', matematica3 = '$mat3', matematica4 = '$mat4', ensino_religioso1 = '$er1', ensino_religioso2 = '$er2', ensino_religioso3 = '$er3', ensino_religioso4 = '$er4', historia1 = '$his1', historia2 = '$his2', historia3 = '$his3', historia4 = '$his4', geografia1 = '$geo1', geografia2 = '$geo2', geografia3 = '$geo3', geografia4 = '$geo4', lingua_estrangeira1 = '$le1', lingua_estrangeira2 = '$le2', lingua_estrangeira3 = '$le3', lingua_estrangeira4 = '$le4', educacao_fisica1 = '$edf1', educacao_fisica2 = '$edf2', educacao_fisica3 = '$edf3', educacao_fisica4 = '$edf4', ciencias1 = '$c1', ciencias2 = '$c2', ciencias3 = '$c3', ciencias4 = '$c4', artes1 = '$art1', artes2 = '$art2', artes3 = '$art3', artes4 = '$art4' WHERE cpf = '$candidato_cpf'";

        mysqli_query($mysqli, $query);

        if(mysqli_affected_rows($mysqli) > 0){
            echo "<script>
                    alert('Notas cadastradas!');
                    window.location.href = 'notas.php';
                </script>";
            exit;
        }else{
            echo "<script>alert('[ERRO]Candidato não cadastrado')</script>";
            header('Location: cadastro.php');
            exit;
        }

    }
    
}elseif(isset($_POST['delete_candidato'])){
        $candidato_cpf = mysqli_real_escape_string($mysqli, $_POST['delete_candidato']);
        $sql = "DELETE FROM candidato WHERE cpf = '$candidato_cpf'";

        mysqli_query($mysqli, $sql);

        if(mysqli_affected_rows($mysqli) > 0){
            echo "<script>
                    alert('Candidato excluído!');
                    window.location.href = 'notas.php';
                </script>";
                header('Location: notas.php');
            exit;
        }

}elseif(isset($_POST['fim_selecao'])){
        $sql = "DELETE FROM `candidato` WHERE curso = 'inf' OR curso = 'enf' OR curso = 'ds' OR curso = 'adm'";

        mysqli_query($mysqli, $sql);

        if(mysqli_affected_rows($mysqli) > 0){
            echo "<script>
                    alert('Seleção encerrada!');
                    window.location.href = 'painel.php';
                </script>";
                header('Location: painel.php');
            exit;
        }

}elseif (isset($_POST['gerar_resultado'])) {

    if ($mysqli->connect_error) {
        die("Erro de conexão: " . $mysqli->connect_error);
    }

    require('fpdf/fpdf.php');

    $cursos = ['inf', 'enf', 'ds', 'adm'];
    $cotas = ['ACP', 'BP', 'ACPR', 'BPR', 'PCD'];

    $nomesCursos = [
        'inf' => 'Informática',
        'enf' => 'Enfermagem',
        'ds'  => 'Desenvolvimento de Sistemas',
        'adm' => 'Administração'
    ];

    $nomesCotas = [
        'ACP'  => 'Ampla Concorrência Pública',
        'BP'   => 'Cota Territorial Pública',
        'ACPR' => 'Ampla Concorrência Privada',
        'BPR'  => 'Cota Territorial Privada',
        'PCD'  => 'PCD'
    ];

    function calcularMedia($linha) {
        $total = 0;
        $count = 0;
        foreach ($linha as $chave => $valor) {
            if (preg_match('/(portugues|matematica|ensino_religioso|historia|geografia|lingua_estrangeira|educacao_fisica|ciencias|artes)[0-9]/', $chave) && is_numeric($valor)) {
                $total += floatval($valor);
                $count++;
            }
        }
        return $count > 0 ? $total / $count : 0;
    }

    function mediaDisciplina($linha, $prefixo) {
        $soma = 0;
        $qtd = 0;
        for ($i = 1; $i <= 4; $i++) {
            $nota = isset($linha[$prefixo.$i]) ? floatval($linha[$prefixo.$i]) : 0;
            $soma += $nota;
            $qtd++;
        }
        return $qtd > 0 ? $soma / $qtd : 0;
    }

    function compararCandidatos($a, $b) {
        if ($b['media'] != $a['media']) {
            return $b['media'] <=> $a['media'];
        }
        $idadeA = strtotime($a['dt_nascimento']);
        $idadeB = strtotime($b['dt_nascimento']);
        if ($idadeA != $idadeB) {
            return $idadeA <=> $idadeB;
        }
        $mediaPortA = mediaDisciplina($a, 'portugues');
        $mediaPortB = mediaDisciplina($b, 'portugues');
        if ($mediaPortB != $mediaPortA) {
            return $mediaPortB <=> $mediaPortA;
        }
        $mediaMatA = mediaDisciplina($a, 'matematica');
        $mediaMatB = mediaDisciplina($b, 'matematica');
        return $mediaMatB <=> $mediaMatA;
    }

    function tituloTabela($cota, $classificado) {
        $rede = '';
        $tipo = '';

        if (in_array($cota, ['ACP', 'BP'])) {
            $rede = 'REDE PÚBLICA - ';
        } elseif (in_array($cota, ['ACPR', 'BPR'])) {
            $rede = 'REDE PRIVADA - ';
        }

        if (in_array($cota, ['ACP', 'ACPR'])) {
            $tipo = 'AMPLA CONCORRÊNCIA';
        } elseif (in_array($cota, ['BP', 'BPR'])) {
            $tipo = 'COTA TERRITORIAL';
        } elseif ($cota == 'PCD') {
            $tipo = 'PCD';
            $rede = '';
        }

        $status = $classificado ? 'CLASSIFICADOS' : 'NÃO CLASSIFICADOS';
        return "$rede$tipo - $status";
    }

    class PDFCurso extends FPDF {
        public $cursoNome = '';

        function Header() {
            $this->SetFont('Arial', 'B', 12);
            $this->Cell(0, 7, utf8_decode('Processo Seletivo EEEP MANOEL MANO'), 0, 1, 'C');
            $this->SetFont('Arial', '', 11);
            $this->Cell(0, 7, utf8_decode("RESULTADO PRELIMINAR - Curso Técnico {$this->cursoNome}"), 0, 1, 'C');
            $this->Ln(5);
        }

        function gerarSecao($titulo, $lista, $cota, $nomesCotas) {
            $this->SetFont('Arial', 'B', 11);
            $this->Cell(0, 10, utf8_decode($titulo), 0, 1);
            $this->SetFont('Arial', 'B', 10);
            $this->Cell(15, 8, 'Ordem', 1);
            $this->Cell(95, 8, 'Nome', 1);
            $this->Cell(60, 8, 'Tipo Concorrência', 1);
            $this->Cell(20, 8, 'Média', 1);
            $this->Ln();

            $this->SetFont('Arial', '', 10);
            $ordem = 1;
            foreach ($lista as $c) {
                $this->Cell(15, 8, $ordem++, 1);
                $this->Cell(95, 8, utf8_decode($c['nome']), 1);
                $this->Cell(60, 8, utf8_decode($nomesCotas[$cota]), 1);
                $this->Cell(20, 8, number_format($c['media'], 5, ',', ''), 1);
                $this->Ln();
            }
            $this->Ln(5);
        }
    }

    $result = $mysqli->query("SELECT * FROM candidato");
    $candidatos = [];

    foreach ($cursos as $curso) {
        foreach ($cotas as $cota) {
            $candidatos["{$curso}_{$cota}"] = [];
        }
    }

    while ($linha = $result->fetch_assoc()) {
        $curso = strtolower($linha['curso']);
        $cota = strtoupper($linha['cota']);
        if (in_array($curso, $cursos) && in_array($cota, $cotas)) {
            $linha['media'] = calcularMedia($linha);
            $candidatos["{$curso}_{$cota}"][] = $linha;
        }
    }

    $vagas = ['PCD' => 2, 'ACP' => 24, 'ACPR' => 6, 'BPR' => 3, 'BP' => 10];
    $aprovados = [];

    foreach ($cursos as $curso) {
        $qtd = [];
        foreach (['PCD', 'BP', 'BPR'] as $cota) {
            $qtd[$cota] = count($candidatos["{$curso}_{$cota}"]);
        }

        $vagas_real = [
            'PCD'  => min($qtd['PCD'], $vagas['PCD']),
            'BP'   => min($qtd['BP'], $vagas['BP']),
            'BPR'  => min($qtd['BPR'], $vagas['BPR'])
        ];

        $vagas_real['ACP'] = $vagas['ACP'] + max(0, $vagas['PCD'] - $qtd['PCD']) + max(0, $vagas['BP'] - $qtd['BP']);
        $vagas_real['ACPR'] = $vagas['ACPR'] + max(0, $vagas['BPR'] - $qtd['BPR']);

        foreach ($cotas as $cota) {
            $grupo = "{$curso}_{$cota}";
            $lista = $candidatos[$grupo];
            usort($lista, 'compararCandidatos');
            $aprovados["aprovados_{$grupo}"] = array_slice($lista, 0, $vagas_real[$cota]);
        }
    }

    $zip = new ZipArchive();
    $zipFile = 'resultados_cursos.zip';

    if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== TRUE) {
        exit("Não foi possível criar o arquivo ZIP.");
    }

    foreach ($cursos as $curso) {
        $cursoNome = $nomesCursos[$curso];
        $pdf = new PDFCurso();
        $pdf->cursoNome = $cursoNome;
        $pdf->AddPage();

        foreach ($cotas as $cota) {
            $grupo = "{$curso}_{$cota}";
            $listaCompleta = $candidatos[$grupo] ?? [];
            usort($listaCompleta, 'compararCandidatos');

            $qtdAprovados = count($aprovados["aprovados_{$grupo}"] ?? []);
            $classificados = array_slice($listaCompleta, 0, $qtdAprovados);
            $naoClassificados = array_slice($listaCompleta, $qtdAprovados);

            if (count($classificados) > 0) {
                $tituloClass = tituloTabela($cota, true);
                $pdf->gerarSecao($tituloClass, $classificados, $cota, $nomesCotas);
            }

            if (count($naoClassificados) > 0) {
                $tituloNao = tituloTabela($cota, false);
                $pdf->gerarSecao($tituloNao, $naoClassificados, $cota, $nomesCotas);
            }
        }

        $arquivoPDF = "resultado_{$curso}.pdf";
        $pdf->Output('F', $arquivoPDF);
        $zip->addFile($arquivoPDF);
    }

    $zip->close();

    header('Content-Type: application/zip');
    header("Content-Disposition: attachment; filename=\"$zipFile\"");
    header('Content-Length: ' . filesize($zipFile));
    readfile($zipFile);

    foreach ($cursos as $curso) {
        unlink("resultado_{$curso}.pdf");
    }
    unlink($zipFile);
    exit;
}







?>