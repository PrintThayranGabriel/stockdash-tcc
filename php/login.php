<?php

require 'db_connection.php';
$login = $_POST['login'];
$senha = md5($_POST['senha']);

$validateUser = $conn->query("SELECT id, nome, cargo FROM usuarios WHERE email = '$login' AND senha = '$senha' "); 

$validateUser = mysqli_fetch_array($validateUser);

if(!isset($validateUser['nome'])){
    echo "<script>
        alert('Email ou senha inválidos');
        window.location.href = 'index.php';
        </script>"; 
        return;
}else{
    session_start();
    $_SESSION['id'] = $validateUser['id'];
    $_SESSION['nome'] = $validateUser['nome'];
    $_SESSION['cargo'] = $validateUser['cargo'];
    
    echo "<script>
        alert('Logado com sucesso!');
        window.location.href = 'dashboard.php';
        </script>";
}

