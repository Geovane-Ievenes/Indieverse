<?php
session_start();

if (!isset($_SESSION['nickname'])) {
    echo ("<script>alert('Tentando invadir o sistema não é ?!')</script>");
    echo ("<script>location.href = 'index.php'</script>");
};

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Verse | Download</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        @font-face {
            font-family: Hollow;
            src: url(./Trajan\ Pro\ Regular.ttf);
        }

        .featured {
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

        .featured h2 {
            font-size: 300%;
            font-family: Hollow;
            margin-top: 12%;
        }

        .featured .f-description {
            margin-top: 5%;
            width: 80%;
            height: 70%;
            font-size: 18pt;
            text-align: justify;
            font-family: Verdana;
        }

        .featured button {
            margin-bottom: 10%;
        }

        .sub a{
            color: #dc3c4d;
        }
    </style>
</head>

<body>

    <header>


    </header>

    <section class="sub">
        <a href="../home.php"><img class="logo" src="logo1.png" alt="logo" height="75px" height="75px"></a>


        <section class="barra_pesq">
            <input class="texto-s" type="text" placeholder="Pesquisa">
            <a href="#" class="btn">
                <i class="fas fa-search"></i>
            </a>
        </section>

        <a href="../logout.php" class="sair">
            <p class="sair-texto">Sair</p>
        </a>

        <?php
        echo ('<a class="ola3" href="../home.php">' . strtoupper($_SESSION['nickname']) . '</a>');
        ?>

    </section>
    </section>

    <?php
    switch ($_GET['jogo']) {
        case 'hollow':
            include('../games/data/hollow.php');
            break;
        case 'eastward':
            include('../games/data/eastward.php');
            break;
        case 'fez':
            include('../games/data/fez.php');
            break;
        case 'iamscared':
            include('../games/data/imscared.php');
            break;
        case 'indivisible':
            include('../games/data/indivisible.php');
            break;
        case 'outlast':
            include('../games/data/outlast.php');
            break;
        case 'stardew':
            include('../games/data/stardew.php');
            break;
        case 'trapstar':
            include('../games/data/trapstar.php');
            break;
        case 'undertale':
            include('../games/data/undertale.php');
            break;
    }
    ?>
    <main>

        <section class="s1">

            <section class="parte1">

                <figure class="sla">
  
                    <a href='playstation.com'><img src="<?php echo($dev_img);?>" alt='Avatar' height='40%' width='20%'></a>
                    
                </figure>

                <h1 class="idtext">
                    <?php
                    echo ($nome);
                    ?>
                </h1><br>
                <h4 class="idtext id2">
                    <?php
                    echo ($dev);
                    ?>
                </h4>
                <br>

                <figure class="yondu"><img src="yondu.png" alt="yondu" heigth="40%" width="40%"></figure>

                <figure class="Gamora"><img src="na.png" alt="Gamora" heigth="90%" width="90%"></figure>

                <figure class="img2" align="center">
                    <?php
                        echo ("<img src=". $game_foto ." height='400px' width='800px'>");
                    ?>
                </figure>
                <section></section>
                <h1 class="id3">
                    <?php
                    echo ($nome);
                    ?>
                </h1>
            </section>


        </section>

        <section class="s2">

            <section class="divpart1"></section>
            <section class="parte2">
                <section class="peter"><img src="peter.png" height="38%" width="38%"></section>
                <section class="cont">



                    <h1 class="title1">

                        <?php
                        echo ($nome . " X64");
                        ?>

                    </h1>

                    <figure class="a">

                        <a href="<?php echo($dowload);?>"><img src='./win.png' width='24%' height='24%'></a>

                    </figure>


                </section>
                <br><br><br>
                <section class="cont">

                    <h1 class="title1">
                        <?php
                        echo ($nome . " X36");
                        ?>
                    </h1>

                    <figure class="a">

                        <a href="<?php echo($dowload);?>"><img src='./win.png' width='24%' height='24%'></a>

                    </figure>


                </section>

                <br><br><br>
                <section class="cont">

                    <h1 class="title2">

                        <?php
                        echo ($nome);
                        ?>

                    </h1>

                    <figure class="a">

                        <a href="<?php echo($dowload);?>"><img src='./win.png' width='24%' height='24%'></a>

                    </figure>


                </section>


            </section>
            <section class="div"></section>
            <section class="parte3">

                <section class="cont2">

                    <br><br>

                    <h2 class="title3" align="center">RECOMENDADOS</h2>



                    <br>


                    <section class="le">

                        <section class="lao"><img src="little.jpg" height="80%" width="80%"></section>

                        <section class="texto6">Littles Nightmares By Chuck Norris</section>


                    </section>



                </section>


                <section class="cont2">

                    <br>

                    <section class="le">

                        <section class="lao"><img src="alien.jpg" height="80%" width="80%"></section>

                        <section class="texto6 texto7">Alien Isolation By Sílvio Santos </section>


                    </section>



                </section>

                <section class="cont2">

                    <br>

                    <section class="le">

                        <section class="lao"><img src="miles.jpg" width="80%"></section>

                        <section class="texto6 texto8">Miles Morales By Bill Gates</section>



                    </section>

                </section>

            </section>


        </section>

        </section>

    </main>

    <footer>

        <section class="fig1"><img src="logofooter.png" height="18%" width="18%">

        </section>

        <figure class="footer1"><img src="footer.png" width="40%" height="40%"></figure>
        <section class="redes1">
            <h3 class="redes">Facebook: Indie Games</h3>
            <h3 class="redes">Instagram: Indie_games_br</h3>
            <h3 class="redes">Contatos: (11)944733194 </h3>

        </section>
        <section class="area">
            <p class="t">Aqui na Indie Games você irá saber o que é diversão de verdade. experimente nossos jogos e divirta-se. </p>

        </section>
    </footer>
    <script src="../fontawesome/js/all.min.js"></script>
</body>

</html>