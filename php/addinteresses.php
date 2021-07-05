<?php
// error_reporting(0);
// ini_set(“display_errors”, 0 );
?>

<?php
require 'db_connection.php';
require 'validatesession.php';

$id = $_SESSION['id'];
$interesse = $_POST['interesse'];

$response = file_get_contents('https://brapi.ga/api/quote/'. $interesse);

if(empty($response)) {
    echo "<script>
    alert('Essa Ação não existe - Consulte nossa lista de ações');
    window.location.href = 'dashboard.php';
    </script>";
    return;
}else{
    $insert = mysqli_query($conn,"INSERT INTO `interesses`(symbol, id_usuario) VALUES('$interesse' , '$id')");
    echo "<script>
    window.location.href = 'dashboard.php';
    </script>";
    return;
}


