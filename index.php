<?php

session_start();

if(isset($_SESSION['nickname'])){
	header('location: home.php');
}

if(isset($_POST['verify'])){
	$email = $_POST['emailPOST'];
	$password = $_POST['passPOST'];
	$nickname = $_POST['nicknamePOST'];
	
	if($email && $password){
		$_SESSION['nickname'] = $nickname;
        header('location: home.php');
	}else{
		echo("<script>alert('Usuário ou senha incorretos')</script>");
	}
}

?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Indie Verse | Login</title>
        <link rel="stylesheet" href="./login.css">
    </head>
    <body>
        
        <main>

            <section class="s1">

                <figure class="perfil"><img src="avatarlogin.png" height="42%" width="42%"></figure>
                



            </section>

            <section class="s2">

            <section class="login">

                <h1 align="center">LOGIN</h1>

                    <form action="user_search.php" method="post">

                        <input type="hidden" name="nickname" value="">
                       
                        <label for="Email">E-mail</label>
                        <br>
                        <input class="ins" type="text" name="email" required="required">

                        <label class="sen" for="senha">Senha </label>
                        <br>
                        <input class="ins ins2" type="password" name="password" required="required">
                        <br>

                        <input type="hidden" name="goto" value="index">
                        <input class="enviar" type="submit" name="login" value="logar"> 
                    
                    </form>
                    
                    <a href="./register.php"><h1 align="center" class="h12"><u>Registre-se</u></h1></a>
                    <figure class="img2"><img src='logo.png' height="20%" width="20%"></figure>

            </section>
            </section>

        </main>

    </body>
</html>