<?php

if(isset($_POST['login']) || isset($_POST['register'])){

	$email = $_POST['email'];
	$password = $_POST['password'];
	$nickname = $_POST['nickname'];
	$goto = $_POST['goto'];

	$emailPOST = false;
	$passPOST = false;

	$arquivo = fopen('users.txt', 'a+');
	if($arquivo){
		rewind($arquivo);

		$allUsers = '';

		while(true){
			$linha = fgets($arquivo);
			if($linha == null) break;

			$allUsers .= $linha;
		}

		$allUsersArr = explode('$', $allUsers);

		for($i = 0; $i < sizeof($allUsersArr); $i++){
			if(preg_match('/'. $email .'/', $allUsersArr[$i])){
				$userArr = $allUsersArr[$i];

				$userCredentials = explode(':', $userArr);

				$emailPOST = $userCredentials[1];

				if($userCredentials[2] == $password){
					$passPOST = 'true';
					$nicknamePOST = $userCredentials[0];
					break;
				}else{
					break;
				}
			}
		}
		fclose($arquivo);
	}
}else{
	echo("<script>alert('Tentando invadir o sistema não é ?!')</script>");
	echo("<script>location.href = 'index.php'</script>");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Suas informações estão quase prontas !!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./styles/waiting_page.css">
</head>
<body>
	<!-- Formulário com dados enviados -->
	<form action="<?php echo($goto);?>.php" method="POST" id="form">
		<input type="hidden" name="emailPOST" id="emailPOST" value="<?php echo($emailPOST);?>">
		<input type="hidden" name="passPOST" id="passPOST" value="<?php echo($passPOST);?>">
		<input type="hidden" name="nicknamePOST" id="nicknamePOST" value="<?php echo($nicknamePOST);?>">

		<input type="hidden" name="ISemail" id="ISemail" value="<?php echo($email);?>">
		<input type="hidden" name="ISpassword" id="ISpassword" value="<?php echo($password);?>">
		<input type="hidden" name="ISnickname" id="ISnickname" value="<?php if(isset($_POST['nickname'])){echo($nickname);}else{echo('');}?>">
	</form>

	<script>
		const formulario = document.querySelector('#form');

		//criar objeto com dados para POST
		var dados = {
			'emailPOST': formulario.querySelector('#emailPOST').value,
			'passPOST': formulario.querySelector('#passPOST').value,
			'nicknamePOST': formulario.querySelector('#nicknamePOST').value,
			'ISpassword': formulario.querySelector('#ISpassword').value,
			'ISemail': formulario.querySelector('#ISemail').value,
			'ISnickname': formulario.querySelector('#ISnickname').value
		}

		//criando function para criar formulário para enviar informações POST
		function post_redirect(dadosPOST){
			let formStr = '';

			formStr += '<form action="<?php echo($goto);?>.php" id="tosend" method="POST">';
			let keys = Object.keys(dadosPOST);
			for(let i = 0; i < 6; i++){
				formStr += '<input type="hidden" name="'+ keys[i] +'" id="send-form" value="' + dadosPOST[keys[i]] + '">';
			}
			formStr += '<input type="hidden" name="verify"></form>';
			
			//tranformar form string em HTML Element
			let formDoc = new DOMParser().parseFromString(formStr, "text/html");
			let formElement = formDoc.body.querySelector('#tosend');
			document.body.append(formElement);
			console.log(formElement);
			document.body.querySelector('#tosend').submit();
		}

		//ENVIANDO DEFINITIVAMENTE DADOS DE VOLTA PARA PÁGINA CORRESPONDENTE
		post_redirect(dados);
	</script>
</body>
</html>