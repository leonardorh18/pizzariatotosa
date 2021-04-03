<!DOCTYPE html>
<html>
<head>

	<title>ToToSa- CADASTRO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


</script>
</head>


<body>


	  

	<?php include "header.php"?>

	<div id="area-principal">

		<div id="cadastro-div">
			
			
			<div class = 'cadastro-form'>
                <form method = 'POST' >
					<label for="email">Email</label><br>
                    <input type="text" id="email" class="form-input" name="login" placeholder="Email">
                    
					<label for="password">Senha</label><br>
                    <input type="text" id="password" class="form-input" name="senha" placeholder="Senha">
					
					<label for="tel">Telefone</label><br>
					<input type="phone" id="tel" class="form-input" name="phone" placeholder="Telefone">

					<label for="rua">Rua</label><br>
					<input type="text" id="rua" class="form-input" name="rua" placeholder="Rua">

					<label for="numerocasa">Numero da casa</label><br>
					<input type="text" id="numerocasa" class="form-input" name="numero" placeholder="Numero da casa">

					<label for="id_bairro">Bairro:</label>
					<select id="id_bairro" class = 'select_bairro' name="field_bairro">
						<option>Selecione</option>
						<option>Centro</option>
						<option>Maria Goretti</option>
						<option>Santa Maria</option>
						<option>Efapi</option>
						<option>Engenho Braum</option>
					</select>
					
					<br>
					<label for="ref">Referência</label><br>
					<input type="text" id="ref" class="form-input" name="referencia" placeholder="Ponto de referência">


					<input type="checkbox" id="emailPromo" name="vemailPromo" value="Sim">
					<label for="emailPromo">Quero receber promoções por Email</label><br>

					<div id='checkboxes'>
						<input type="checkbox" id="wppPromo" name="wppPromo" value="Sim">
						<label for="wppPromo">Quero receber promoções por WhatsApp</label><br>
					</div>

                    
					<br>
					<input type="button" class="button-register" value="Registrar" id='registrar' onclick="regIn()">
                </form>
                
			</div>



		</div>


	</div>
	
	<script> 
	function verificaCampos(){


	}
	</script>
	<?php include "footer.php"?>

</body>
</html>