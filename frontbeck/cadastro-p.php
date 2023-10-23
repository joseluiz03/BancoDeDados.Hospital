<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-p.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="/imagem para o site/istockphoto-1479494606-612x612.jpg" alt="" width="800px" height="700px">
        </div>
        <div class="form">
            <div class="login-button">
                <button><a href="/tela-inicial/inicial.html">voltar</a></button>
            </div>
            <form action="salvarpac.php" method="post" >
                <div class="form-header">
                    <div class="title">
                        <h1>paciente</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="/inicial/inicial2.html">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">nome</label>
                        <input type="text" name="nome" id="" placeholder="digite seu nome">
                    </div>

             <div class="input-box">
                <label for="CPF">CPF:</label>
                <input type="text" name="cpf" id="" placeholder="digite seu CPF">
             </div>
    
            <div class="input-box">
                <label for="data">Data</label>
                <input type="date" name="data" id="" placeholder="">
            </div>
            <div class="input-box">
                <label for="diagnostico">diagnostico</label>
                <input type="text" name="diagnostico" id="" placeholder="Seu diagnostico" >
            </div>
            <div class="input-box">
                <label for="Responsavel">Responsavel</label>
                <input type="text" name="responsavel" id="" placeholder="Nome do seu Responsável" >
            </div>

    

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <p>Gênero:</p>
          
            <input type="radio" name="genero" value="Masculino"/> Masculino<br />
            <input type="radio" name="genero" value="Feminino"/> Feminino<br />
            <br>
            
                    </div>
                </div>

                <div class="continue-button">
                    <input type="submit" value="salvar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>