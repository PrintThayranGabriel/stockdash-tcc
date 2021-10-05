<?php

require 'db_connection.php';
require 'validatesession.php';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="shortcut icon" href="/meutcc/images/favicon.ico"/>
    <link rel="stylesheet" href="css/stocklist.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- início do preloader -->
    <div id="preloader">
        <div class="inner">
        <!-- HTML DA ANIMAÇÃO-->
        <div class="bolas">
            <div></div>
            <div></div>
            <div></div>                    
        </div>
        </div>
    </div>
    <!-- fim do preloader --> 

     <!-- Modal -->

     <div id="modal">
        <div class="modal_content">
            <h2>Voce realmente quer sair?</h2>

            <div class="modal_actions">
                <form action="logout.php" method="post">
                    <button class="logout" name="logout" type="submit">Sim</button>
                </form>

                <button id="close_modal">Não, voltar a navegação</button>
            </div>
        </div> 
    </div>

    <!-- Fim do Modal -->

    <div class="container">
        <div class="container-sidebar">

            <div class="logo">
                <a href="#"><strong>Stock</strong>Dash</a>
            </div>

            <div id="menu">
                <div class="links">
                    <button class="btn">
                        <i class="las la-home" style="color: #FFF;"></i>
                        <a href="dashboard.php">Home</a>
                    </button>
                    
                    <button class="btn">
                        <i class="las la-exchange-alt" style="color: #FFF;"></i>
                        <a href="exchange.php">Conversor</a>
                    </button>

                    <button class="btn">
                        <i class="las la-clipboard-list" style="color: #FFF;"></i>
                        <a href="stocklist.php">Lista de ações</a>
                    </button>
                    
                    <button class="btn">
                        <i class="las la-info-circle" style="color: #FFF;"></i>
                        <a href="about.php">Como Funciona?</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
                
    <div class="container-content">
        <header>
                <div class="perfil">
                    <img class="foto" src="../images/usuario-de-perfil.png" alt="foto de perfil">
                    <p class="username">
                        <?=$_SESSION['nome'];?>
                    </p>

                    
                    <button id="open_modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                        </svg>
                    </button>

                </div>
            </header>

        <div class="main">
            <div class="container-cards">
                    <div class="cards">
                        <?php

                            for($i =1; $i < 49; $i++){
                            $response = file_get_contents('https://brapi.ga/api/quote/list');
                    
                            $response = json_decode($response);
                                echo '<div class="card">';

                                echo '<h1>';
                                echo $response->stocks[$i]->stock;
                                echo '</h1>';

                                echo '<h2>';
                                echo $response->stocks[$i]->name;
                                echo '</h2>';

                                echo '<p>R$';
                                echo number_format($response->stocks[$i]->close, 2, '.', '');
                                echo '</p>';
        
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    <script src="../assets/modal.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(window).on('load', function () {
            $('#preloader .inner').fadeOut();
            $('#preloader').delay(350).fadeOut('slow'); 
            $('body').delay(350).css({'overflow': 'visible'});
        })
    </script>

    <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("menu");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
    }
    </script>

</body>
</html>