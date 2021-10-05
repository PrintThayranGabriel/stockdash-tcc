<?php
$servername = "localhost";
$username = "u708779117_admin";
$password = "ThayranGabrielBiel19081#";
$db_name = "u708779117_stockdash";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Falha na conexão com o banco de dados" . mysqli_connect_error());
}

?>