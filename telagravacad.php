<!DOCTYPE html>
<html>
<head>
	<title> Tela Grava Form Login e Senha </title>
</head>
		<?php
			$servidor= 'localhost'; // nome do servidor = localhost
			$usuario = 'root'; //nome do usuário de acesso ao banco
			$senha = ''; //senha do usuário: em branco e sem espaço
			$bd = "gif_refrigeracoes"; //nome do banco de dados que será aberto
			$conn = mysqli_connect($servidor,$usuario,$senha, $bd);

				// Check connection
		if (!($conn)) {
		      die("Connection failed: " . mysqli_connect_error());
		}
		 
		echo "Connected successfully";
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$comsenha= $_POST['comsenha'];

		$sql = "INSERT INTO administrador (nome,email,senha,comsenha) VALUES ('$nome', '$email','$senha', '$comsenha')";
		if (mysqli_query($conn, $sql)) {
		      echo "New record created successfully";
		} else {
		      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
		
			/* -------------------------------------------------------- */	
			/* - 4ª passo: Redirecionamento de página: executa o  ------*/
			/* - redicionamento de página para Tela de Login e Senha -- */	
			/* ---------------------------------------------------- */
			 			 
					header("Location: login.php"); 

			/* Caso o redirecionamento não ocorra ocorre um erro e sai do programa. */
					exit;
			/* -------------------------------------------------------- */	
			/* - FIM 4ª passo: Redirecionamento de página: executa o  ------*/
			/* - redicionamento de página para Tela de Login e Senha -- */	
			/* ---------------------------------------------------- */
			?>
	</body>
</html>