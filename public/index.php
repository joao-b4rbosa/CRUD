<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Se o usuário não estiver logado e não estiver na página de login, redirecionar para a página de login
    if ($_SERVER['PHP_SELF'] !== '/index.php/login') {
        header('Location: /index.php/login');
        exit();
    }
}

if ($_SERVER['PHP_SELF'] === '/index.php/lista-produtos' || $_SERVER['PHP_SELF'] === '/index.php') {
    require_once __DIR__ . "/../src/lista-produtos.php";
} 

elseif ($_SERVER['PHP_SELF'] === '/index.php/cadastrar-produto') {
    require_once __DIR__ . "/../src/cadastrar-produto.php";
} 

elseif ($_SERVER['PHP_SELF'] === '/index.php/editar-produto') {
    require_once __DIR__ . "/../src/editar-produto.php";
} 

elseif ($_SERVER['PHP_SELF'] === '/index.php/remover-produto') {
    require_once __DIR__ . "/../src/remover-produto.php";
} 

elseif ($_SERVER['PHP_SELF'] === '/index.php/login') {
    require_once __DIR__ . "/../src/login/login.php";
} 

elseif ($_SERVER['PHP_SELF'] === '/index.php/logout') {
    require_once __DIR__ . "/../src/login/logout.php";
} 

else {
    http_response_code(404);
    require_once __DIR__ . '/../public/page/404.php';
}
?>




