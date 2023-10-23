<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospício CAPS</title>
</head>
<body>



        <form action="salvar.php" method="post">
            <h2> Acesso aos Pacientes: </h2>

            Nome: <input type="text" name="nome" id="">
             <br>
            Seu CPF: <input type="text" name="CPF" id="">
            <br>
            Data de Nascimento: <input type="date" name="data" id="" >
            
          <p>Gênero:</p>
          
            <input type="radio" name="genero" value="Masculino"/> Masculino<br />
            <input type="radio" name="genero" value="Feminino"/> Feminino<br />
            <br>
            <input type="submit" value="salvar">
        </form>
        <br>

        <!-- Aqui vcs decidem se fazer em outro html ou nao -->
        <!-- Cadastro  do Responsável -->
        <form action="salvar.php" method="post">
            <h2> Acesso aos Responsáveis: </h2>

            Nome: <input type="text" name="nome" id="">
             <br>
            Endereço: <input type="text" name="endereco" id="">
            <br>
            Telefone: <input type="text" name="telefone" id="" >
            <br>

            <input type="submit" value="salvar">
        </form>

        <!-- Cadastro  do Médico -->
        <form action="salvarmed.php" method="post">
            <h2> Acesso aos Médicos: </h2>

            Nome: <input type="text" name="nome" id="">
             <br>
            CRM: <input type="text" name="crm" id="">
            <br>
            Especialidade <input type="text" name="especialidade" id="">
            <br>
            Paciente: <input type="text" name="paciente" id="">
            <br>
            CPF: <input type="text" name="cpf" id="">  
            <br> 
            Telefone: <input type="text" name="telefone" id="" >
            <br>

            
            <input type="submit" value="salvar">
                   </form>

        



    <h2> Listagem de usuarios</h2>
    
    <?php include 'listar.php';?>

</body>
</html>