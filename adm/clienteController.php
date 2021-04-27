<?php
include_once "../classes/ClienteDAO.php";
if(!isset($_GET['acao'])){
    include "views/layout/header.php";
    // pg inicial de adm. de sabores; carrega lista de registros
   

    $obj = new ClienteDAO();
    $lista = $obj->listar();
    include "views/listaCliente.php";
    include "views/layout/footer.php";
}
else {    
	switch($_GET['acao']){

        case 'cadastra':
            if(!isset($_POST['cadastrar'])){

                include "views/layout/header.php";
                include "views/cadastraCliente.php";
                include "views/layout/footer.php";

            } else {

                $cliente = new Cliente();
                $cliente->setNome($_POST['nome']);
                $cliente->setEmail($_POST['email']);
                $cliente->setSenha($_POST['senha']);
                $cliente->setTelefone($_POST['phone']);
                $cliente->setEndereco($_POST['rua']);
                $cliente->setBairro($_POST['field_bairro']);
                $cliente->setDataNascimento($_POST['dtnasc']);
                $cliente->setComoConheceu($_POST['field_comoConheceu']);
                if (isset($_POST['wppPromo']))
                    $cliente->setPromoParceiros($_POST['wppPromo']);
                if (isset($_POST['vemailPromo']))
                    $cliente->setPromoPizza($_POST['vemailPromo']);                  
                
                $cliente->setObservacoes($_POST['obs']);
                $erros = $cliente->validate();
                if(count($erros) != 0){ // algum campo em branco
                    echo '<script> alert("Erro"); </script>';
                    header("Location: clienteController.php");                    
                } else{
                    $bd = new ClienteDAO();
                    if($bd->inserir($cliente))
                        echo '<script> alert("Cadastro concluido") </script>';
                        header("Location: clienteController.php");
                }
                



            }

           
         break;


        case 'altera':

            if(!isset($_POST['alterar'])){

                include "views/layout/header.php";
                $bd = new ClienteDAO;
                echo $_GET['cod'];
                $cliente = $bd->buscar($_GET['cod']);
                
                include "views/alteraCliente.php";
                include "views/layout/footer.php";

            } else {

                $cliente = new Cliente();
                $cliente->setNome($_POST['nome']);
                $cliente->setEmail($_POST['email']);
                $cliente->setSenha($_POST['senha']);
                $cliente->setTelefone($_POST['phone']);
                $cliente->setEndereco($_POST['rua']);
                $cliente->setBairro($_POST['field_bairro']);
                $cliente->setDataNascimento($_POST['dtnasc']);
                $cliente->setObservacoes($_POST['obs']);
                $cliente->setCodigo($_POST['codigo']);

                $erros = $cliente->validateUp();
                if(count($erros) != 0){ // algum campo em branco
                    echo '<script> alert("Erro"); </script>';
                    header("Location: clienteController.php");                    
                } else{
                    $bd = new ClienteDAO();
                    if($bd->alterar($cliente))
                        echo '<script> alert("Cadastro concluido") </script>';
                        header("Location: clienteController.php");
                }
                
            }


          



        break;


         case 'exclui':

            $bd = new ClienteDAO();
            if($bd->excluir($_GET['cod']))
                header("Location: clienteController.php");

            break;
                      
    }// fim switch
} // fim else

?>

