<?php 
require_once __DIR__ . '/../../public/page/loginTela.php';
require_once __DIR__ . '/../sql/config/conexao-usuarios.php';


// use esse bloco a baixo para cadastrar um usuário

// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $senha = filter_input(INPUT_POST, 'senha');

// $hashSenha = password_hash($senha, PASSWORD_BCRYPT);

// // Inserir dados do usuário no banco de dados

// if(!empty($senha) || !empty($email)){
//     $query = "INSERT INTO users (email, senha) VALUES (:email, :senha)";
//     $stmt = $pdo->prepare($query);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':senha', $hashSenha);
//     $result = $stmt->execute();
    
//     if ($result) {
//       echo "Usuário cadastrado com sucesso!";
//     }
// }
// else{
//     echo "erro";
// }



//use esse para o codigo voltar a funcionar 

// Verificar se o usuário já está logado
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: /'); // Redirecionar para a página inicial
    exit();
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha');

// Prepare a consulta SQL
$query = "SELECT * FROM users WHERE email = :email";
$stmt = $pdo->prepare($query);
$stmt->bindValue(':email', $email);
$resultado = $stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

// Verificar se o usuário foi encontrado e se a senha é correta
if ($usuario && password_verify($senha, $usuario['senha'])) {
    header('Location: /');
    // Configurar a variável de sessão para indicar que o usuário está logado
    $_SESSION['logged_in'] = true;
    $_SESSION['user_id'] = $usuario['id']; // Você pode armazenar outras informações do usuário na sessão, se necessário
    exit();
} else {
    // Senha incorreta ou usuário não encontrado, proibir acesso
    echo '<div class="erro">Usuário ou senha inválidos</div>';
}
?>

<style>
    .erro{
        color: red;
        text-align: center;
        margin-top: 20px;
    }
</style>





