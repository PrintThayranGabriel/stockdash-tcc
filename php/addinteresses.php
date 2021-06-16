<?php
require 'db_connection.php';
require 'validatesession.php';

$id = $_SESSION['id'];
$interesse = $_POST['interesse'];

$response = file_get_contents('https://brapi.ga/api/quote/'. $interesse);

if(empty($response)) {
    echo "<script>
    alert('Essa Ação não existe');
    window.location.href = 'dashboard.php';
    </script>";
    return;
}else{
    $insert = mysqli_query($conn,"INSERT INTO `interesses`(id_usuario,symbol) VALUES('$id','$interesse')");
    echo "<script>
    window.location.href = 'dashboard.php';
    </script>";
    return;
}


