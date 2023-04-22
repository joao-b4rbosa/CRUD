<?php
// Iniciar a sessão
session_start();

// Destruir a sessão
session_destroy();

// Redirecionar para a tela de login
header('Location: /index.php/login');
exit();
?>
