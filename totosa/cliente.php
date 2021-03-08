<!DOCTYPE html>
<html>
<head>

	<title>ToToSa- Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<body id ='login-body'>

	<?php include "header.php"?>

	<div id="area-principal">

		<div id="login-div">
			
			<!-- abertura postagem -->
			<div class = 'login-form'>
                <form>
                    <input type="email" id="email" class="form-input" name="login" placeholder="Email">
                    
                    <input type="password" id="password" class="form-input" name="login" placeholder="Senha">
                    
					<input type="button" class="button-login" value="Entrar" onclick="logIn()">
					<br>
					<input type="button" class="button-register" value="Registrar" onclick="logIn()">
                </form>
                
			</div><!--// fechamento postagem -->



		</div>


	</div>
	<?php include "footer.php"?>

</body>
</html>