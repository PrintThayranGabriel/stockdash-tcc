<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "db_stockdash";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if (!$conn) {
    die("Falha na conexão com o banco de dados" . mysqli_connect_error());
}

?>