<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/mediaqueries.css">
    <title>StockDash</title>
</head>
<body>
    <a id="button"></a>
    
    <header>
        <div class="logo">
            <a href="#"><strong>Stock</strong>Dash</a>
        </div>

        <div class="nav">
            <a href="#video">Funcionamento</a>
            <a href="#blog">Blog</a>
            <a href="#contato">Contato</a>
        </div>

        <div class="button">
            <a href="php/index.php">Entrar</a>
        </div>
    </header>

    <section class="banner">
        <div class="text">
            <h1>Todos seus Ativos em um único lugar!</h1>
            <p>Junte todos seus ativos em uma unica dashboard.</p>
            <div class="buttons">
                <a href="php/index.php" id="botao1">Acessar</a>
                <a href="#" id="botao2">Saiba mais</a>
            </div>
        </div>

        <div class="img">
            <img src="./images/banner.png">
        </div>
    </section>

    <section id="video" class="hero1">
        <div>
            <h1>Veja como funciona nossa ferramenta</h1>
            <p>Adicione o código de suas ações e logo terá um gráfico atualizado diáriamente com o preço das suas ações</p>
        </div>
        <div class="hero1-video">
            <iframe src="https://fast.wistia.net/embed/iframe/akiyubgxvx" title="y2mate.com - Power BI Cotação Atualizada Automaticamente e Cálculo de Rentabilidade de Carteira Parte 1_v144P Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen msallowfullscreen width="520" height="293"></iframe>
            <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
        </div>
    </section>

    <section class="hero2">
        <div>
            <h1>Unifique seus investimentos</h1>
            <p>Veja como andam as suas ações em uma única dashboard!.</p>
        </div>
        <div>
            <img class="hero-image" src="./images/hero2.png" width="500px">
        </div>
    </section>

    <section class="hero3">
        <div>
            <h1>Receba Alertas de preços</h1>
            <p>Seja notificado quando um ativo estiver com um bom preços.</p>
        </div>
        <div>
            <img class="hero-image" src="./images/hero3.png" width="500px">
        </div>
    </section>

    <section id="blog" class="services">
        <h1 class="title">Últimos artigos</h1>
        <div class="cards">
            <div class="card1">
                <h1>Como funciona o mercado de ações?</h1>
                <p>Os nossos sistemas são 100% responsivos, ou seja, se adapatam a qualquer tipo de tela.</p>
                <a href="#">Ler Mais</a>
            </div>

            <div class="card2">
                <h1>Como escolher boas ações para comprar</h1>
                <p>Os nossos sistemas são 100% responsivos, ou seja, se adapatam a qualquer tipo de tela.</p>
                <a href="#">Ler Mais</a>
            </div>

            <div class="card3">
                <h1>Como usar o powerBI na sua vida financeira</h1>
                <p>Os nossos sistemas são 100% responsivos, ou seja, se adapatam a qualquer tipo de tela.</p>
                <a href="#">Ler Mais</a>
            </div>
        </div>
    </section>
    
 
    <section>
        <h1 class="title3">Assine nossa Newsletter</h1>
        <div class="formulario">
            <form action="">
                <label>Nome</label>
                <input type="text">

                <label>Email</label>
                <input type="text">
               
                <input type="submit" value="Enviar">
            </form>
    
            <img src="./images/contato.png" width="600px">
        </div>
    </section>

    </script>

    <footer id="contato">
        <div class="contents">
            <div class="content1">
                <h2>Links Últeis</h2>
                <a href="">Políticas de privacidade</a><br>
                <a href="">Termos e serviços</a><br>
                <a href="">Perguntas frequentes</a><br>
            </div>

            <div class="content2">
                <h2>Links Últeis</h2>
                <a href="">Políticas de privacidade</a><br>
                <a href="">Termos e serviços</a><br>
                <a href="">Perguntas frequentes</a><br>
            </div>

            <div class="content3">
                <h2>Links Últeis</h2>
                <a href="">Políticas de privacidade</a><br>
                <a href="">Termos e serviços</a><br>
                <a href="">Perguntas frequentes</a><br>
            </div>

            <div class="content4">
                <h2>Links Últeis</h2>
                <a href="">Políticas de privacidade</a><br>
                <a href="">Termos e serviços</a><br>
                <a href="">Perguntas frequentes</a><br>
            </div>
        </div>

        <div class="socialmedias">
            <img src="./images/facebook.png" >
            <img src="./images/instagram.png" >
            <img src="./images/twitter.png" >
            <img src="./images/youtube.png" >
        </div>
    </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/up-arrow.png"></button>
    <script src="assets/app.js"></script>
</body>
</html>