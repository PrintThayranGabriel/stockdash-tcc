<?php
	include("db_connection.php");

	if (isset($_POST['enviar'])) {
		if (isset($_POST['email'])) {
			$email = $_POST['email'];

			$novasenha = substr(md5(time()), 0, 8);
			$nscriptografada = md5($novasenha);

			$email_check = mysqli_query($conn, "SELECT email FROM usuarios WHERE email ='$email'");
			if (mysqli_num_rows($email_check) == 0) {
				echo "<script>
                alert('Esse e-mail não está cadastrado em nosso sistema');
                window.location.href = 'esqueciasenha.php';
                </script>";
                exit;
			}else{
			    
				$arquivo = "Olá, sua nova senha é: " . $novasenha;
			  	$remetente = "test@hostinger-tutorials.com";
				$destino = $email;
				$assunto = "Nova senha";
                
				$enviosenha = mail($destino, $assunto, $arquivo);
				
				if($enviosenha){
					$query = mysqli_query($conn, "UPDATE usuarios SET senha = '$nscriptografada' WHERE email = '$email'");
					 echo "<script>
                            alert('Sua nova senha foi encaminhada pelo email');
                            window.location.href = 'login.php';
                          </script>";
					
				}else{
					echo "<script>
            		alert('Erro ao enviar e-mail');
            		window.location.href = 'esqueciasenha.php';
            		</script>";
            		exit;
				}
			}
		}else{
			echo "<script>
            alert('Preencha todos os campos!');
            window.location.href = 'esqueciasenha.php';
            </script>";
            exit;
		}
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/reset_password.css">
</head>
<body>
	<div class="container">
		<form method="POST">
            <h2>Redefinir Senha</h2>
			<h3>Informe seu e-mail para enviarmos sua nova senha</h3>
			
			<input type="email" placeholder="Endereço de e-mail" name="email" required>
			<input type="submit" value="Enviar" name="enviar">

            <span>* Este email pode demorar até 3 minutos para chegar</span>
		</form>
    </div>
</body>
</html>