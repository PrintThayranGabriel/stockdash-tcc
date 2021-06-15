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
    <link rel="stylesheet" href="css/dashboard.css">
    <title>dashboard</title>
</head>
<body>

    <div class="container">
        <div class="container-sidebar">
            
            <div class="menu">
                <div class="logo">
                    <a href="#"><strong>Stock</strong>Dash</a>
                </div>
                <div class="links">
                <div class="menu-links">
                    <img src="/meutcc/images/home.png" alt="">
                    <a href="#">Home</a>
                </div>
                <div class="menu-links">
                    <img src="/meutcc/images/charts.png" alt="">
                    <a href="#">Estatísticas</a>
                </div>
                <div class="menu-links">
                    <img src="/meutcc/images/news.png" alt="">
                    <a href="#">Notícias</a>
                </div>
                </div>
                
            </div>
        </div>

    <div class="container-content">
        <header>
            <div class="perfil">
                <img class="foto" src="/meutcc/images/usuario-de-perfil.png" alt="foto de perfil">
                <p class="username">
                    <?=$_SESSION['nome'];?>
                </p>

                <form action="logout.php" method="post">
                    <button class="logout" name="logout" type="submit">
                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M7 12h14l-3 -3m0 6l3 -3" />
                            </svg>
                    </button>
                </form>
            </div>
        </header>

        <div class="main">
            <div class="addstock">
                <label>
                    <input id="real" type="text" placeholder="Digite o código da ação">
                    <input type="submit" value="Adicionar">
                </label>
            </div>

            <div class="container-cards">
                <div class="cards">
                    <div class="card-up">
                        <div class="card-header"> 
                            <h2 class="stockcode">SANB11</h2>
                            <p class="date">14/06/2021</p>
                        </div>
                    
                        <span class="price">R$ 38,18</span>
                        <span class="variation"> + 0,23% </span>
                    </div>

                    <div class="card-up">
                        <div class="card-header"> 
                            <h2 class="stockcode">BIDI4</h2>
                            <p class="date">14/06/2021</p>
                        </div>
                        <span class="price">R$ 43,70</span>
                        <span class="variation"> + 7,38% </span>
                    </div>

                    <div class="card-down">
                        <div class="card-header"> 
                            <h2 class="stockcode">OIBR3</h2>
                            <p class="date">14/06/2021</p>
                        </div>
                        <span class="price">R$ 14,05</span>
                        <span class="variation"> - 1,35% </span>
                    </div>
                </div>
            </div>
        
        
        <!-- <div class="container-chart">
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <canvas id="myChart"></canvas>

            <script>

            var ctx = document.getElementById('myChart');
            var ctx = document.getElementById('myChart').getContext('2d');
            var ctx = $('#myChart');
            var ctx = 'myChart';

            </script>
                <script>
                var ctx = document.getElementById('myChart');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['25','26/05','27/05','28/05','29/05','30/05','31/05','01/06', '02/06', '03/06', '04/06', '05/06', '06/06','07/06','08/06'],
                        datasets: [{
                            label: 'Rentabilidade Geral',
                            data: [50, 20, 30, 50, 20, 30,75,50, 20, 30, 50, 20, 30,75,10],
                            backgroundColor: [
                                '#F3CF34',
                            ],
                            borderColor: [
                                'rgb(0,0,0)',
                                'rgb(0,0,0)',
                                'rgb(0,0,0)',
                                'rgb(0,0,0)',
                                'rgb(0,0,0)',
                                'rgb(0,0,0)',
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true
                            }

                        }
                        
                        
                    }
                });
            </script>
        </div> -->
    </div>

    

</body>
</html>