
<?php


?>
	<div id="area-principal">

<div id="cadastro-div">
    
    
    <div class = 'cadastro-form'>
        <form method="POST" action='' onsubmit="return doRegister()" >

            <input type="text" id="nome" class="form-input" name="codigo" value="<?= $cliente[0]->getCodigo() ?> " placeholder="Nome" hidden>

            <label for="nome">Nome</label><br>
            <input type="text" id="nome" class="form-input" name="nome" value="<?= $cliente[0]->getNome() ?> " placeholder="Nome" >
            
            <label for="email">Email</label><br>
            <input type="text" id="email" class="form-input"  value=" <?= $cliente[0]->getEmail() ?>" name="email" placeholder="Email" >
            
            <label for="password">Senha</label><br>
            <input type="password" id="password" class="form-input" name="senha" placeholder="Senha" value = "<?= $cliente[0]->getSenha()?>">
     
            <label for="tel">Telefone</label><br>
            <input type="phone" id="tel" class="form-input" name="phone" placeholder="Telefone" value = "<?= $cliente[0]->getTelefone() ?>"  >

            <label for="rua">Endereço</label><br>
            <input type="text" id="rua" class="form-input" name="rua" placeholder="Rua" value = "<?= $cliente[0]->getEndereco() ?>" >

            <label for="dtnasc">Data nascimento</label><br>
            <input type="date" id="dtnasc" class="form-input" name="dtnasc" value = "<?= $cliente[0]->getDataNascimento() ?>" >

            <label for="id_bairro">Bairro:</label>
            <select id="bairro" class = 'select_bairro' name="field_bairro">
                <option><?= $cliente[0]->getBairro() ?></option>
                <option>Centro</option>
                <option>Maria Goretti</option>
                <option>Santa Maria</option>
                <option>Efapi</option>
                <option>Engenho Braum</option>
            </select>
            
            <br>
            
            <label for="obs">OBS</label><br>
            <input type="text" id="obs" class="form-input" name="obs" placeholder="obs" value = "<?=$cliente[0]->getObservacoes() ?>" >
            
            <br>
            <input type="submit"  class="button-register" name ='alterar' value="Alterar" id='registrar' >
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

