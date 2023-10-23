<?php 
include 'conexao.php';

$listarSQL = mysqli_query($conexao, "SELECT * FROM usuario");

echo '<table>';

while($listar = mysqli_fetch_assoc($listarSQL)){
    echo '<tr>';
    echo '<td>'.$listar['id'], '</td>';
    echo '<td>'.$listar['nome'],'</td>';
    echo '<td>'.$listar['nascimento'],'</td>';
    echo '<td> <a href="deletar.php">Deletar</a> </td>';
    echo '</tr>';
}
echo '</table>';
?>