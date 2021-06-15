<?php
  require 'db_connection.php';
?>

<!DOCTYPE html> 
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - StockDash</title>
        <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>

   <div class="container">

    <div class="form">
        
        <form action="insert.php" method="post">
            <h2>Cadastre-se</h2>
            <input type="text" name="nome" placeholder="Digite seu nome" required><br> 

            <input type="text" name="login" placeholder="Digite seu emai" required><br> 

            <input type="password" name="senha" placeholder="Digite sua senha" required><br> 

            <input type="submit" value="Cadastrar"><br>
        </form>
        <p class="sign-in">Ja tem uma conta?<a id="cadastro" href="index.php" >Fazer Login</a><br></p>
    </div>
   </div>
</body> 
</html>


