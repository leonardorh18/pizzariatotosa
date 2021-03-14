<!DOCTYPE html>
<html>
	
<head>
	<title>Contato
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="UTF-8">
	<meta name="description" content="Pizzaria Totosa">
	<meta name="keywords" content="Pizza, totosa, Pizzaria">
	<meta name="author" content="Leonardo H. Rocha">

</head>
<body>

	<?php include "header.php"?>
<div id='area-principal'>

	<div id="principal"> 

		<div id='contato-form'>

			<form id='form-contato'>
				<label for="nome-contato">Digite seu nome: </label>
				<input type="text" name='nome-contato' id='nome-contato' placeholder="Digite seu nome"> 
				<br>

				<label for="nome-contato">Digite seu email: </label>
				<input type="email" name='email-contato' id='email-contato' placeholder="Digite seu  email"> 

				 <br>
				<label >Motivo do contato: </label>
				<textarea name="desc" id="desc" cols="30" rows="4" placeholder="Motivo"></textarea>

				<br><br>

				<button  class="button-register" value="Registrar" id='registrar' onclick="regIn()"> Enviar </button>


			</form>
		</div>

		<div id = 'text-contato'>
			<p>Telefone: (49) 9 91234-1235</p> 
			<p>
				Rua Baconzitos nº 341, Bairro Azeitona, Xanxerê - SC
			</p>
		</div>

		<div id='map'>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d998.6787542199027!2d-52.41110836379267!3d-26.875348859619617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4c3b6e82f25f9%3A0xbc32395625c6fa5c!2sAnjos%20Della%20Pizza!5e0!3m2!1spt-BR!2sbr!4v1615695254793!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:3;" allowfullscreen="" loading="lazy"></iframe>
	
		</div>
		


	</div>
</div>
	<?php include "footer.php"?>

</body>
</html>