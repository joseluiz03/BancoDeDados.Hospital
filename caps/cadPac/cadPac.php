<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadPac.css">
    <title>Formulário</title>
</head>

<body>
    <div style="" class="container">
        <div class="form-image">
            <img src="../imgs/istockphoto-1479494606-612x612.jpg" alt="" width="800px" height="500px">
        </div>
        <div class="form">
            <form action="../salvarpac.php" method="post" >
                <div class="form-header">
                    </div>
                    <div class="title">
                        <h1>Cadastro do Paciente</h1>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="" placeholder="Nome do Paciente">
                        </div>
                        <div class="input-box">
                            <label for="CPF">CPF:</label>
                            <input type="text" name="cpf" id="" placeholder="CPF do Paciente">
                        </div>                      
                        <div class="input-box">
                            <label for="data">Data de Nascimento:</label>
                            <input type="date" name="data" id="" placeholder="">
                        </div>
                        <div class="input-box">
                            <label for="diagnostico">Diagnóstico:</label>
                            <input type="text" name="diagnostico" id="" placeholder="Diagnóstico do Paciente" >
                        </div>
                        <div class="input-box">
                            <label for="Responsavel">Responsável:</label>
                            <input type="text" name="responsavel" id="" placeholder="Responsável do Paciente" >
                        </div>
                    </div>
        
        <div class="gender-inputs">
            <div class="gender-title">
                <p>Gênero do Paciente:</p>
          
            <input type="radio" name="genero" value="Masculino"/> Masculino<br />
            <input type="radio" name="genero" value="Feminino"/> Feminino<br />
            <br>
            
        </div>
    </div>
    
                <div class="continue-button">
                    <input type="submit" value="salvar">
                </div>
                <div class="login-button">
                    <button><a href="../home/home.php">Voltar</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>