<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST["nome"];
    $matricula= $_POST["matricula"];
    $curso = $_POST["curso"];

    if (!file_exists("alunos.txt")) 
        {
            $arqAluno = fopen("alunos.txt", "w");
            $linha = "nome;matricula,curso\n";
            fwrite($arqAluno, $linha);
            fclose($arqAluno);
        }
    
    $arqAluno = fopen("alunos.txt", "a") or die("erro");
    $linha = $nome . ";" . $matricula . ";" . $curso . "\n";
    fwrite($arqAluno, $linha);
    fclose($arqAluno);
    $msg = "aluno cadastrado.";
}
?>


<!DOCTYPE html>
<head>
    <title>Aluno cadastro</title>
</head>
<body>
    <form action="2_aluno.php" method="POST" required>
      Nome: <input type="text" name="nome"> <br> 
      Matrícula: <input type="text" name="matricula" required><br>
      Curso: <input type="text" name="curso" required>
        <input type="submit" value="Enviar">
    </form>
    <?php if(!empty($msg)) { ?>
        <p>
            <?php echo $msg; ?>
        </p>
        <?php } ?>

</body>
</html>

