


	<div id="area-principal">

		<div id="cadastro-div">
			
			
			<div class = 'cadastro-form'>
                <form method="POST" action='' onsubmit="return doRegister()" >
					<label for="nome">Nome</label><br>
                    <input type="text" id="nome" class="form-input" name="nome" placeholder="Nome" >
                    
					<label for="email">Email</label><br>
                    <input type="text" id="email" class="form-input" name="email" placeholder="Email" >
                    
					<label for="password">Senha</label><br>
                    <input type="password" id="password" class="form-input" name="senha" placeholder="Senha">

					<label for="confirmPassword">Confirmar Senha</label><br>
                    <input type="password" id="confirmPassword" class="form-input" name="confirmPassword" placeholder="Confirme sua senha" >
					
					<label for="tel">Telefone</label><br>
					<input type="phone" id="tel" class="form-input" name="phone" placeholder="Telefone" >

					<label for="rua">Endereço</label><br>
					<input type="text" id="rua" class="form-input" name="rua" placeholder="Rua" >

					<label for="dtnasc">Data nascimento</label><br>
					<input type="date" id="dtnasc" class="form-input" name="dtnasc" >

					<label for="id_bairro">Bairro:</label>
					<select id="bairro" class = 'select_bairro' name="field_bairro">
						<option>Selecione</option>
						<option>Centro</option>
						<option>Maria Goretti</option>
						<option>Santa Maria</option>
						<option>Efapi</option>
						<option>Engenho Braum</option>
					</select>
					
					<br>

					
					<div >
					<fieldset class = 'como-conheceu'>
						<legend>Como você conheceu nossa empresa?</legend>
						<label><input type="radio" name="field_comoConheceu" value="1"  checked>Loja física</label>
						<br>
						<label><input type="radio" name="field_comoConheceu" value="2">Redes sociais</label>
						<br>
						<label><input type="radio" name="field_comoConheceu" value="3" >Publicidade</label>
						<br>
						<label><input type="radio" name="field_comoConheceu" value="4" >Indicação de
							amigos</label>
					</fieldset>
					</div>

					
					<div id='checkboxes'>

					<input type="checkbox" id="totosaPromo" name="vemailPromo" value="1">
					<label for="emailPromo">Quero receber promoções da Totosa</label><br>

					<input type="checkbox" id="parceiroPromo" name="wppPromo" value="1">
					<label for="wppPromo">Quero receber promoções de parceiros</label><br>
					</div>
					
					<label for="obs">OBS</label><br>
					<input type="text" id="obs" class="form-input" name="obs" placeholder="obs" >
                    
					<br>
					<input type="submit"  class="button-register" name ='cadastrar' value="Registrar" id='registrar' >
                </form>
                
			</div>



		</div>


	</div>
	
	<script> 
	function doRegister(){

		email = document.getElementById("email");
		pass = document.getElementById("password");
		cpass = document.getElementById("confirmPassword");
		tel = document.getElementById("tel");
		rua = document.getElementById("rua");
		bairro = document.getElementById("bairro");
		
		
		if (email.value && pass.value  && cpass.value  && tel.value  && rua.value  && bairro.value ){

			if ( pass.value == cpass.value){
				
				if (pass.value.length >= 5){

				console.log("Verificando no php...");
				return true;

				} else {
					window.alert("A senha deve ter no minimo 5 caracteres!");
					return false;

				}


			} else {

				window.alert("As senhas não correspondem!");
				return false;
			}
		} else {

			window.alert("Preencha todos os campos!");
			return false;

		}
	}
	</script>
	
