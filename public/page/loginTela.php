<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginTela.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Login | CDA</title>
</head>
<body>
    
    <nav>
        <div><a href="/"><img src="../img/logo.png" alt="logo"></a></div>
    </nav>

    <div class="form-centro">
        <form action="/index.php/login" method="post">
            <h1>LOGIN</h1>
            <div class="email">
                <label for="">E-MAIL: </label>
                <br>
                <input type="email" name="email" id="email">
            </div>
            <div class="senha">
                <label for="">SENHA: </label>
                <br>
                <input type="password" name="senha" id="senha">
            </div>
            <div class="botao">
                <button>Logar</button>
            </div>
        </form>
    </div>
</body>
</html>