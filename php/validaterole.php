<?php

require 'validatesession.php';

if($_SESSION['cargo'] != 'admin'){
    echo "<script>
        alert('Voce não é um administrador');
        window.location.href = 'dashboard.php';
        </script>";
        return;
}