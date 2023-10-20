<?php 
include 'conexao.php';
$id = $_GET['id'];
if (isset($_GET['id'])){
    $sqli = mysqli_query($conexao, "DELETE FROM usuario WHERE id = {id}");
}