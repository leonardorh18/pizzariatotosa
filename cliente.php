<!DOCTYPE html>
<html>
<head>

	<title>ToToSa- Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

function regIn(){
		window.location.replace("cadastro.php");
	}
</script>
</head>


<body id ='login-body'>


	  

	<?php include "header.php"?>

	<div id="area-principal">

		<div id="login-div">
			
		
			<div class = 'login-form'>
                <form>
                    <input type="email" id="email" class="form-input" name="login" placeholder="Email">
                    
                    <input type="password" id="password" class="form-input" name="login" placeholder="Senha">
                    
					<input type="button" class="button-login" value="Entrar"  onclick="logIn()">
					<br>
					<input type="button" class="button-register" value="Registrar" id='registrar' onclick="regIn()">
                </form>
                
			</div>



		</div>


	</div>
	

	<?php include "footer.php"?>

</body>
</html>