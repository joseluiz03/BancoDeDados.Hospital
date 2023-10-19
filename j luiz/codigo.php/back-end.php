<?php
  $hostname = "localhost";
  $bancodedados = "capss";
  $usuario = "root";
  $senha = "";

    $conexao = new mysqli($hostname,$bancodedados,$usuario,$senha);
    
        if($conexao->connect_errno){
            echo "Erro";
        }

            else{
                echo "Conexao feita!";
            }


?>