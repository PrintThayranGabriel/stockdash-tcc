<!DOCTYPE html> 
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="/meutcc/images/favicon.ico"/>
   <link rel="stylesheet" href="css/login.css">
   <title>StockDash</title>
</head>
<body>

   <div class="container">
      <div class="form">
         <h2 class="text">Bem Vindo de volta!</h2>
         <form action="login.php" method="post">
            <input type="text" name="login" placeholder="Login" required><br> 
            <input type="password" name="senha" placeholder="Senha" required><br> 
            <input type="submit" value="Entrar">
         </form>
         <p class="sign-in">Ainda não tem conta? <a id="cadastro" href="cadastro.php" >Cadastre-se</a><br></p>
      </div>
   </div>

</body> 
</html>


