<?php
include 'conexao.php';
/* PACIENTE #1 */
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$genero = $_POST['genero'];
$diagnostico = $_POST['diagnostico'];
$responsavel = $_POST['responsavel'];

/* #1 */
$sql = mysqli_query($conexao, "INSERT INTO Paciente(NOME, NUM_CADASTRO, DATA_NASC, GENERO, DIAGNOSTICO, RESPONSAVEL ) 
VALUES ('$nome', '$cpf', $data, '$genero', '$diagnostico', '$responsavel' )");

// Redireciona para o arquivo index.php
header("Location: cadastro-r.php");
exit();
?>