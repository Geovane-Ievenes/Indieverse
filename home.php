<?php
session_start();

if(!isset($_SESSION['nickname'])){
    echo("<script>alert('Tentando invadir o sistema não é ?!')</script>");
	echo("<script>location.href = 'index.php'</script>");
};

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/4dd14f3c9f.js" crossorigin="anonymous"></script>
            <title>IndieVerse | Home</title>
            <link rel="stylesheet" href="./style.css">
        <style>
            @font-face{
                font-family: Hollow;
                src: url(./Trajan\ Pro\ Regular.ttf);
            }

            @font-face{
                font-family: C-title;
                src: url(./DelaGothicOne-Regular.ttf);
            }

            .featured{
                width: 40%;
                height: 80%;

                background-color: #fefefe;
                color: #0e0e0e;
                opacity: 0.45;

                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                border-radius: 10%;

                margin-left: 10%;
            }

            .featured h2{
                font-size: 300%;
                font-family: Hollow;

                margin-top: 12%;
            }

            .featured .f-description{
                margin-top: 5%;

                width: 80%;
                height: 70%;

                font-size: 18pt;

                text-align: justify;
                font-family: Verdana;
            }

            .featured button{
                margin-bottom: 10%;
            }

            #logo{
                cursor: pointer;
            }

            #t1{
                font-size: 150%;
                font-family: C-title;

                margin-bottom: 5%;
            }

            #t2{
                font-size: 15pt;
                font-family: serif;
            }

            #cat:hover{
                cursor:pointer;
            }
        </style>
        <script>
            function ver(){
                let menu = document.getElementById('menu_desce');
                let loading = document.getElementById('loading');
                let game = document.getElementsByClassName('game');

                if(menu.classList.contains('subir')){

                    menu.classList.add('descer');
                    menu.classList.remove('subir');

                    setTimeout(() => {
                        loading.classList.add('loading_some');
                        loading.classList.remove('loading');
                        for(let c = 0; c < 3; c++){
                            game[c].classList.add('game_aparece');
                            game[c].classList.remove('game_some');
                        }
                    }, 1000);

                }else{
                    menu.classList.add('subir');
                    menu.classList.remove('descer');

                    setTimeout(() => {
                        loading.classList.add('loading');
                        loading.classList.remove('loading_some');
                        for(let c = 0; c < 3; c++){
                            game[c].classList.add('game_some');
                            game[c].classList.remove('game_aparece');
                        }
                    }, 1000);
                }

            }
        </script>
    </head>
    <body>

        <header>
            <a id="go-up"></a>
        </header>

            <section class="sub">  <figure><a href="index.php" id="logo"><img class="logo" src="logo1.png" alt="logo" height="75px" height="75px"></a></figure>         
                
                </section><section> 

                    <section class="barra_pesq">
                        <input class="texto-s" type="text" placeholder="Pesquisa">
                        <a href="#" class="btn">
                            <i class="fas fa-search"></i>
                        </a>
                    </section>

                    <a href="./logout.php" class="sair"><p class="sair-texto">Sair</p></a>

                    <?php
                        echo('<a class="ola3" href="home.php">'. strtoupper($_SESSION['nickname']) .'</a>');
                    ?>

                    <!--Menu que Desce-->

                    <div class="seta seta_desc"><i class="fas fa-arrow-down"></i></div>
                    <div class="menu_desce subir" id="menu_desce">
                        <div class="loading" id="loading"></div>
                        <section class="categories">
                            <section class="game game_some" onclick="redirect('category.php', 'terror')">
                                    <img id="terror" src="./icons/terror.png" width="50%" heigth="50%" alt="Logo Horror Games">
                                    <section class="title">
                                        <p id="t1">HORROR</p>
                                        <p id="t2">Tem coragem suficiente para jogar isso ?</p>
                                    </section>
                            </section>
                            <section class="game game_some" onclick="redirect('category.php', 'aventura')">
                                    <img id="aventura" src="./icons/adventure.png" width="50%" heigth="50%" alt="Logo Adventure Games">
                                    <section class="title">
                                        <p id="t1">AVENTURA</p>
                                        <p id="t2">Explore um novo mundo e se divirta</p>
                                    </section>
                            </section>
                            <section class="game game_some" onclick="redirect('category.php', 'rpg')">
                                    <img id="rpg" src="./icons/rpg.png" width="45%" heigth="45%" alt="Logo RPG Games">
                                    <section class="title">
                                        <p id="t1">RPG</p>
                                        <p id="t2">Evolua e conquiste seus objetivos</p>
                                    </section>
                            </section>
                        </section>
                    </div>

                </section>
            </section>

        <main>
            <section class="s1">
            
                <section class="slide">
                        
                    <figure><img class="foto" src="Indie Verse.png" alt="logo" height="65%" height="65%"></figure>    

                </section>

                <section class="texto"><h1 class="h1">SOBRE NÓS</h1>

                    <section class="descrição">
                        <p>Olá, seja bem Vindo! Você está na Indie Verse. falaremos um pouco sobre nós para que você entenda nossa história e como nós funcionamos</p>
                        <p>Basicamente nossa história é a seguinte: Quatro amigos que gostavam muito de jogar jogos índies decidiram criar uma página para que outras pessoas também possam jogar e experimentar coisas novas, fugindo do padrão de muitos jogos atuais</p>
                    </section>
                
                </section>  
            </section>
            <section class="s2">
                <section class="featured">
                    <h2>O TESOURO DO MÊS !!</h2>
                    <section class="f-description">
                        <p>Hollow Knight é um jogo de ação e aventura 2D Metroidvania, que se passa em Hallownest, um antigo reino fictício. O jogador controla um cavaleiro parecido com um inseto, silencioso e sem nome enquanto explora o mundo subterrâneo. ... Quando o cavaleiro sofre dano de um inimigo ou do meio ambiente, uma máscara é reduzida.</p>
                    </section>
                    <button id="botao" onclick="gotogame('hollow')">IR PARA JOGO</button>
                </section>
            </section>
            <section class="s3">

                <a href="#go-up" id="cat" onclick="ver()">
                    <img src="./seta.png" onmouseover="animationup()" onmouseout="animationdown()" id="seta-cima" alt="Seta para Categorias" width=20%" height="85%">
                </a>

                <a class="go-to-jogos" onclick="ver()" href="#go-up" onmouseover="animationup()" onmouseout="animationdown()"><p>CONFERIR JOGOS</p></a>
            </section>
        
        </main>
        <footer>

            <figure  class="fig1" ><img src="logofooter.png" header="12%" width="12%"></figure>
                    <br>
                    <h3 class="redes">Facebook: Indie Games</h3><br>
                    <h3 class="redes">Instagram: Indie_games_br</h3><br>
                    <h3 class="redes">Contatos: (11)944733194 </h3>

                    <section class="area"><p class="t">Aqui na Indie Games você irá saber o que é diversão de verdade. experimente nossos jogos e divirta-se. Porém jogue com muito respeito com seus colegas e adversários. </p>
                        
                    </section>
        </footer>

        
        <script src="fontawesome/js/all.min.js"></script>
        <script>

            function redirect(url, category){
                location.href = url + '?category=' + category;
            }

            function gotogame(game){
                location.href = './games_template/index.php?jogo=' + game;
            }

            function animationup(){
                let img = document.querySelector('#seta-cima');
                let text = document.querySelector('.go-to-jogos');

                img.style = 'transform: translateY(-10px);';
                text.style = 'color: #3d424a;';
            }

            function animationdown(){
                let img = document.querySelector('#seta-cima');
                let text = document.querySelector('.go-to-jogos');

                img.style = 'transform: translateY(10px);'
                text.style = 'color: #fefefe;';
            }

            /*Animação Menu que Desce*/
            var barra = document.querySelectorAll('.seta');

            barra[0].addEventListener('click', ()=>{
                let menu = document.getElementById('menu_desce');
                let loading = document.getElementById('loading');
                let game = document.getElementsByClassName('game');

                if(menu.classList.contains('subir')){

                    menu.classList.add('descer');
                    menu.classList.remove('subir');

                    setTimeout(() => {
                        loading.classList.add('loading_some');
                        loading.classList.remove('loading');
                        for(let c = 0; c < 3; c++){
                            game[c].classList.add('game_aparece');
                            game[c].classList.remove('game_some');
                        }
                    }, 1000);

                }else{
                    menu.classList.add('subir');
                    menu.classList.remove('descer');

                    setTimeout(() => {
                        loading.classList.add('loading');
                        loading.classList.remove('loading_some');
                        for(let c = 0; c < 3; c++){
                            game[c].classList.add('game_some');
                            game[c].classList.remove('game_aparece');
                        }
                    }, 1000);
                }

            })
        </script>
    </body>
    </html>