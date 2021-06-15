<?php

session_start();

if(isset($_POST['logout'])){
    session_destroy();
    echo "<script>
        alert('Sessão encerrada');
        window.location.href = 'index.php';
        </script>";
        return;
}else{
    echo "<script>
        alert('Voce precisa clicar no botão');
        window.location.href = 'dashboard.php';
        </script>";
        return;
}