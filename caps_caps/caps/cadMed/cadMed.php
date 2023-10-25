<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadMed.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="../imgs/istockphoto-1479494606-612x612.jpg" alt="" width="800px" height="700px">
        </div>
        <div class="form">
            
            <div class="form-header">
                    <div class="title">
                        <h1>Cadastro do Médico</h1>
                    </div>
                </div>
                <form action="../salvarmed.php" method="post" >
                    <div class="input-group">
                    
                    <div class="input-box">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="" placeholder="Nome do Médico">
                    </div>
                    
                    <div class="input-box">
                        <label for="crm">CRM:</label>
                        <input type="text" name="crm" id="" placeholder="Ex: xxxxxx">
                    </div>
                    
                    <div class="input-box">
                        <label for="especialidade">Especialidade:</label>
                        <input type="text" name="especialidade" id="" placeholder="Especialidade">
                    </div>
                    <div class="input-box">
                        <label for="paciente">Paciente</label>
                        <input type="text" name="paciente" id="" placeholder="Nome do Paciente">
                    </div>
                    
                    <div class="input-box">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="" placeholder="000.000.000-00">
                    </div>
                    
                    <div class="input-box">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="" placeholder="(xx) xxxx-xxxx" >
            </div>
            
            
        </div>
        
        <div class="continue-button">
            <input type="submit" value="salvar">
        </div>
        <div class="back-button">
            <button><a href="../home/home.php">Voltar</a></button>
        </div>
        
    </form>
</div>
</div>
</body>

</html>