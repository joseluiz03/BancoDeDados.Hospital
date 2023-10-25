<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadResp.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="" alt="" width="px" height="px">
        </div>
        <div class="form">
            <div class="login-button">
                <button><a href="../home/home.php">voltar</a></button>
            </div>
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>responsavel</h1>
                    </div>
                </div>
                <form action="salvar.php" method="post">

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">nome</label>
                        <input type="text" name="nome" id="" placeholder="digite seu nome">
                    </div>

             <div class="input-box">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="" placeholder="digite seu Endereço">
             </div>
    
            <div class="input-box">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="" placeholder="digite seu Telefone" >
            </div>
            <div class="input-box">
                <label for="telefone">Cpf</label>
                <input type="text" name="cpf" id="" placeholder="digite seu Cpf" >
            </div>
            
                </div>
            <div class="continue-input">
                <input type="submit" value="salvar">
            </div>
            </form>
            </form>
        </div>
    </div>
</body>

</html>