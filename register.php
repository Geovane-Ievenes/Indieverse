<?php

session_start();

if(isset($_POST['verify'])){
	$email = $_POST['emailPOST'];

	$ISemail = $_POST['ISemail'];
	$ISpassword = $_POST['ISpassword'];
	$ISnickname = $_POST['ISnickname'];
	
	if(!$email){
		$newUser = $ISnickname . ':' . $ISemail . ':' . $ISpassword . '$';

		$arquivo = fopen('users.txt', 'a+');
		if($arquivo){
			fwrite($arquivo, $newUser);

			fclose($arquivo);
		}
		echo("<script>alert('Registro efetuado com sucesso!')</script>");
		echo("<script>location.href = 'index.php'</script>");
	}else{
		echo("<script>alert('Usuário já existente!')</script>");
		echo("<script>location.href = 'index.php'</script>");
	}	
}elseif(isset($_SESSION['nickname'])){
	echo("<script>alert('Efetue primeiro o logout para criar uma nova conta')</script>");
	echo("<script>location.href = 'home.php'</script>");
}

?>

<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Indie Verse | Registro</title>
        <link rel="stylesheet" href="./register.css">
    </head>
    <body>
        
        <main>

            <section class="s1">

                <figure class="perfil"><img src="ola.jpg" height="55%" width="55%"></figure>
            
            </section>

            <section class="s2">

            <section class="login">

                <h1 align="center">Registre-se</h1>

                    <form action="user_search.php" method="post" id="form">

                        <label for="Email" id="nick">Apelido (Máx 10)</label>
                        <br>
                        <input class="ins" type="text" name="nickname" maxlength="10" required="required">
                       
                        <label for="Email">E-mail</label>
                        <br>
                        <input class="ins" type="text" name="email" required="required">

                        <label for="senha">Senha</label>
                        <br>
                        <input class="ins" type="password" name="password" required="required">
                        <br>

                        <input type="hidden" name="goto" value="register">
                        <input class="enviar" type="submit" name="register" value="Registrar-se"> 
                    
                    </form>
                    
                    <a href="./index.php"><h1 align="center" class="h12"><u>Login</u></h1></a>
                    <figure class="img2"><img src='logo.png' height="20%" width="20%"></figure>
                
            </section>
            </section>

        </main>

    </body>
</html>