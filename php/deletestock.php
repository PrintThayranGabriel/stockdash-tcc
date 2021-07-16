<?php

require 'db_connection.php';
require 'validatesession.php';

if(isset($_POST['delete']) and isset($_POST['id_interesse'])) {
    $id_usuario = $_SESSION['id'];
    $id_interesse = $_POST['id_interesse'];
    
    $select = $conn->query("SELECT id FROM `interesses` WHERE `id_usuario` = '$id_usuario' AND `id` = '$id_interesse' ");
    $select = mysqli_fetch_array($select);    

    if (isset($select['id'])) {
        $delete = $conn->query("DELETE FROM `interesses` WHERE `id` = '$id_interesse' AND `id_usuario` = '$id_usuario'");
    
        if ($delete) {
            echo "<script>
            alert('Ação descartada');
            window.location.href = 'dashboard.php';
            </script>";
            return; 
        }

    } else {
        echo "<script>
        alert('Erro ao deletar ação');
        window.location.href = 'dashboard.php';
        </script>";
        return;
    }

    
}