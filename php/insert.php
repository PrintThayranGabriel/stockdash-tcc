<?php
    require 'db_connection.php';
    if(isset($_POST['login']) && isset($_POST['senha'])) {
        //verifica se os campos de nome de usuario e email estao vazios
        if(!empty($_POST['login']) && !empty($_POST['senha'])) {
            //ignorando "escapando" caracteres especiais 
            $username = mysqli_real_escape_string($conn, htmlspecialchars($_POST['nome']));
            $user_login = $_POST['login'];
            $user_senha = md5($_POST['senha']);
        
            //verificando se o e-mail é valido
            if (filter_var($user_login, FILTER_VALIDATE_EMAIL)) {
                //verificando se o e-mail ja existe
                $check_login = mysqli_query($conn, "SELECT `email` FROM `usuarios` WHERE email  = '$user_login'");
                if (mysqli_num_rows($check_login) > 0) {
                    echo "<h3>Esse email ja pertence a outra conta, tente outro email!</h3>";
                } else
                    {
                        //Inserindo dados na tabela USUARIOS do banco de dados
                        $insert_query = mysqli_query($conn,"INSERT INTO `usuarios`(nome,email,senha,cargo) VALUES('$username','$user_login','$user_senha', 'usuario')");
                        //Verificando se os dados foram inseridos
                        if($insert_query) {
                            echo "<script>
                            alert('Dados Inseridos');
                            window.location.href = 'dashboard.php';
                            </script>";
                            exit;
                        } else
                            {
                                echo "<h3>Ops... Algo de errado aconteceu! Tente outra vez!</h3>";
                            }
                    }
            } else
                {
                    echo "Endereço de e-mail invalido. Por favor, insira um endereço de e-mail valido.";
                }
        } else
            {
                echo "<h4>Por favor preencha todos os campos.</h4>";
            }
    } else
        {
            //Definindo o codigo de resposta do cabeçalho
            http_response_code(404);
            echo "<h1>Error 404. Pagina nao encontrada!</h1>";
        }
?>