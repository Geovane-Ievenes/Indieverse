<?php

session_start();

if(!isset($_SESSION['nickname'])){
    echo("<script>alert('Tentando invadir o sistema não é ?!')</script>");
	echo("<script>location.href = 'index.php'</script>");
};

if(isset($_GET['category'])){
    $category = $_GET['category'];
}else{
    header('Location: home.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/4dd14f3c9f.js" crossorigin="anonymous"></script>
            <title>IndieVerse | Games</title>
            <link rel="stylesheet" href="./category.css">
            <link rel="stylesheet" href="./games.css">
        <style>
            @font-face{
                font-family: Hollow;
                src: url(./Trajan\ Pro\ Regular.ttf);
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

            .show-games{
                width: 80%;
                padding-left: 15%;

                display: flex;
                flex-wrap: wrap;

                justify-content: left;
                align-items: center;
            }
        </style>
    </head>
    <body>

        <header></header>

            <section class="sub">  <figure><a href="index.php" id="logo"><img class="logo" src="logo1.png" alt="logo" height="75px" height="75px"></a></figure>
                
                
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
                </section>
            </section>

            <main>

                <section class="s1">    
                    <section class="category"> 
                        <h1 id="category-text">CATEGORIAS: </h1>

                        <select name="opcoes" id="opcoes" value="<?php echo($category);?>" onchange="categoria(this.value)">
                                <option id="selecione">Selecione</option>
                                <option value="all" id="all">Todos</option>
                                <option value="terror" id="terror">Horror</option>
                                <option value="aventura" id="aventura">Aventura</option>
                                <option value="rpg" id="rpg">RPG</option>
                        </select>
                    </section>
                    
                    <section class="show-games">
                        <?php
                            switch($category){
                                case 'all':
                                    include('./games/all.php');
                                    break;
                                case 'terror':
                                    include('./games/horror.php');
                                    break;
                                case 'aventura':
                                    include('./games/adventure.php');
                                    break;
                                case 'rpg':
                                    include('./games/rpg.php');
                                    break;
                                default: 
                                    header('./notfound.php');
                            }
                        ?>
                    </section>
                        
                </section>
            </main>
       
        <footer>

            <section class="fig1" ><img src="logofooter.png" header="12%" width="12%"></section>
                    <br>  

                  <section class="redes1">
                    <h3 class="redes">Facebook: Indie Games</h3>
                    <h3 class="redes">Instagram: Indie_games_br</h3>
                    <h3 class="redes">Contatos: (11)944733194 </h3>

                </section>
                    <section class="area"><p class="t">Aqui na Indie Games você irá saber o que é diversão de verdade. experimente nossos jogos e divirta-se. Porém jogue com muito respeito com seus colegas e adversários. </p>
                        
                    </section>
        </footer>

        
        <script src="fontawesome/js/all.min.js"></script>
        <script src="./script.js"></script>
    </body>
    </html>