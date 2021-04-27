<?php
include_once "../classes/SaborDAO.php";
if(!isset($_GET['view'])){
    include "views/layout/header.php";
    // pg inicial de adm. de sabores; carrega lista de registros
    include "views/inicio.php";
    
    $obj = new SaborDAO();
    $lista = $obj->listar();
    
    include "views/layout/footer.php";
}
else {    
	switch($_GET['view']){

        case 'addcliente':

            header('Location: clienteController.php');
            
         break;

         case 'addsabor':

            header('Location: saborController.php');

         break;
                      
    }// fim switch
} // fim else

?>

