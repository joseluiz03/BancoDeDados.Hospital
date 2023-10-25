<?php
include 'conexao.php';

/* MÉDICO #3 */
$nome = $_POST['nome'];
$crm = $_POST['crm'];
$telefone = $_POST['telefone'];
$especialidade = $_POST['especialidade'];
$cpf = $_POST['cpf'];
$paciente = $_POST['paciente'];
/* #3 */
$sql = mysqli_query($conexao, "INSERT INTO medico(NOME, CRM, TELEFONE, ESPECIALIDADE, CPF, PACIENTE ) 
VALUES ('$nome', '$crm', '$telefone', '$especialidade', '$cpf', '$paciente' )");
/* $sql4 = mysqli_query($conexao, "INSERT INTO Paciente(nome) VALUE ('$paciente')") */


// Redireciona para o arquivo index.php
header("Location: ./home/home.php");
exit();
?>