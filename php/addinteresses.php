<?php
require 'db_connection.php';
require 'validatesession.php';

$id = $_SESSION['id'];
$interesse = $_POST['interesse'];

$insert = mysqli_query($conn,"INSERT INTO `interesses`(id_usuario,symbol) VALUES('$id','$interesse')");

// if(isset($insert)) {
//     echo "<script>
//     alert('Ação inserida');
//     window.location.href = 'dashboard.php';
//     </script>";
//     exit;
// }

