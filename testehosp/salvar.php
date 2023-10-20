<?php
include 'conexao.php';
/* PACIENTE #1 */
$nome = $_POST['nome'];
$cpf = $_POST['CPF'];
$data = $_POST['data'];
$genero = $_POST['genero'];
/* #1 */
$sql = mysqli_query($conexao, "INSERT INTO Paciente(NOME, NUM_CADASTRO, DATA_NASC, GENERO) VALUES ('$nome', '$cpf', $data, '$genero')");

/* RESPONSÁVEL #2 */
$nomee = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
/* #2 */
$sql2 = mysqli_query($conexao, "INSERT INTO responsavel(NOME, ENDERECO, TELEFONE) VALUES ('$nomee', '$endereco', $telefone)");

/* MÉDICO #3 */
$nome3 = $_POST['nome'];
$crm = $_POST['crm'];
$telefone3 = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$cpff = $_POST['CPF'];
$paciente= $_POST['paciente'];
/* #3 */
$sql3 = mysqli_query($conexao, "INSERT INTO medico(NOME, CRM, TELEFONE, ESPECIALIDADE, CPF, PACIENTE) 
VALUES ('$nome3', '$crm', $telefone3, $especialidade, $cpff, $paciente)");


// Redireciona para o arquivo index.php
header("Location: indexx.php");
exit();
?>