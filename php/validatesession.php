<?php

session_start();

if(!isset($_SESSION['id'])){
    echo "<script>
        alert('Essa página exige um login');
        window.location.href = 'index.php';
        </script>";
        return;
}

